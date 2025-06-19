<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Testimonial::count();
        return view('admin.pages.testimonial.testimonials',compact('count'));
    }

    public function getData()
    {
    $testimonials = Testimonial::get();

    $data = $testimonials->map(function ($testimonial,$index) {

        $status = '';
        if ($testimonial->status == '0') {
            $status = '<span class="badge bg-warning">Draft</span>';
        }else if($testimonial->status == '1'){
            $status = '<span class="badge bg-success">Published</span>';
        } else {
            $status = '<span class="badge bg-danger">Archieved</span>';
        }

        $encrypt= Crypt::encrypt($testimonial->id);
        return [
            'no' => $index + 1, 
            'name' => $testimonial->name,
            'position' => $testimonial->position,
            'status' => $status,
            'testimonial' => Str::limit(strip_tags(html_entity_decode($testimonial->testimonial)), 100),
            'action' => '<div class="d-flex gap-1">
                   <a href="' . route('edit.testimonial', $encrypt) . '" class="btn btn-sm btn-info" title="Edit"><i class="align-middle" data-feather="edit"></i></a>
                      <button class="btn btn-sm btn-danger btn-delete" data-id="' . $testimonial->id . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
                 <a href="'. route('show.testimonial', $encrypt).'" class="btn btn-sm btn-primary" title="publish"><i class="align-middle" data-feather="send" ></i></a>
                      </div>'
        ];
    });

    return response()->json(['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.testimonial.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'testimonial' => 'required',
            'image'       => 'required|file|mimes:jpg,jpeg,png|max:1024',
            'position'    => 'required|string|max:255',
        ]);
    
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image_testi', 'public');
            // Ini akan menyimpan file ke storage/app/public/thumbnails
        }
        $count = Testimonial::count();
    
        if($count == 5){
            return redirect()->route('admin.testimonials')->with('error', 'Testimonial sudah mencapai maximum!');
        }else{
            $save =Testimonial::create([
                'name'        => $request->name,
                'testimonial' => $request->testimonial,
                'position'    => $request->position,
                'image'       => $imagePath,
                'created_at'  => now(),
            ]);
             if($save){
                return redirect()->route('admin.testimonials')->with('success', 'Testimonial berhasil disimpan!');
            }else{
                return redirect()->route('admin.testimonials')->with('error', 'Testimonial gagal disimpan!');
            }
        }
    
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decrypt=Crypt::decrypt($id);
        $testimonial = Testimonial::where('id', $decrypt)->firstOrFail();

        return view('admin.pages.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypt=Crypt::decrypt($id);
        $testimonial = Testimonial::findOrFail($decrypt);
        return view('admin.pages.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // Validasi data
        $request->validate([
            'name'        => 'required|string|max:255',
            'testimonial' => 'required',
            'position'    => 'required|string|max:255',
        ]); 

        // Proses file image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
                Storage::disk('public')->delete($testimonial->image);
            }
            
            // Simpan image baru
            $data['image'] = $request->file('image')->store('image_testi', 'public');
        } else {
            $imagePath = $testimonial->image; // pakai yang lama jika tidak upload baru
        }
        
        $update = $testimonial->update([
            'name'        => $request->name,
            'testimonial' => $request->testimonial,
            'position'    => $request->position,
            'image'       => $imagePath,
            'updated_at'  => now(),
        ]);
    
        if($update){

            return redirect()->route('admin.testimonials')->with('success', 'testimonial berhasil diperbarui!');
        }else {
            return redirect()->route('admin.testimonials')->with('error', 'testimonial gagal diperbarui!');
            
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $testimonial = Testimonial::find($id);
        $deleted = $testimonial->delete();
        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Testimoni berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Testimoni gagal dihapus.'
            ]);
        }

    }

    public function publishTestimonial($id)
    {
       $updated= Testimonial::where('id',$id)->update(['status'=>'1']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.testimonials')->with('success', 'testimonial berhasil di-publish!');
        } else {
            return redirect()->route('admin.testimonials')->with('error', 'Terjadi kesalahan saat publish testimonial.');
        }
    }

    public function draftTestimonial($id)
    {
       $updated= Testimonial::where('id',$id)->update(['status'=>'0']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.testimonials')->with('success', 'testimonial berhasil di-arsipkan!');
        } else {
            return redirect()->route('admin.testimonials')->with('error', 'Terjadi kesalahan saat arsip testimonial.');
        }
    }

    public function trashedTestimonial(){
        $testimonials = Testimonial::onlyTrashed()->paginate(10);
        return view('admin.pages.testimonial.trashed', compact('testimonials'));
    }

    public function restoreTestimonial($id)
    {
    	$testimonial = Testimonial::onlyTrashed()->where('id',$id);
    	$restore= $testimonial->restore();
        if ($restore) {
            return response()->json([
                'success' => true,
                'message' => 'Testimonial berhasil dikembalikan.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Testimonial gagal dikembalikan.'
            ]);
        }
    }
}
