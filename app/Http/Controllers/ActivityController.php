<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
   public function index()
    {
        $count = Activity::count();
        return view('admin.pages.activity.activities',compact('count'));
    }

    public function getData()
    {
    $activities = Activity::get();

    $data = $activities->map(function ($activity,$index) {

        $position = '';
        if ($activity->position == '1') {
            $position = '<span class="badge bg-warning">First Row</span>';
        }else{
            $position = '<span class="badge bg-info">Second Row</span>';
        }
        $encrypt= Crypt::encrypt($activity->id);
        return [
            'no' => $index + 1, 
            'image' => asset('storage/' . $activity->image)?? '',
            'title' => $activity->title,
            'position' => $position,
            'action' => '<div class="d-flex gap-1">
                   <a href="javascript:;" class="btn btn-sm btn-info btn-edit-act" title="Edit" data-id="' . $encrypt . '" ><i class="align-middle" data-feather="edit"></i></a>
                      <button class="btn btn-sm btn-danger btn-delete" data-id="' . $activity->id . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
                 <a href="'. route('show.activity', $encrypt).'" class="btn btn-sm btn-primary" title="publish"><i class="align-middle" data-feather="send" ></i></a>
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
      return view('admin.pages.activity.add');
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
            'title'        => 'required|string|max:255',
            'position'    => 'required',
            'image'       => 'required|file|mimes:jpg,jpeg,png|max:1024',
        ]);
    
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('activities', 'public');
            // Ini akan menyimpan file ke storage/app/public/thumbnails
        }
    
        $save =Activity::create([
            'title'        => $request->title,
            'position'    => $request->position,
            'image'       => $imagePath,
            'created_at'  => now(),
        ]);
    
        if($save){
            return redirect()->route('admin.activities')->with('success', 'activity berhasil disimpan!');
        }else{
            return redirect()->route('admin.activities')->with('error', 'activity gagal disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decrypt=Crypt::decrypt($id);
        $activity = Activity::where('id', $decrypt)->firstOrFail();

        return view('admin.pages.activity.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypt=Crypt::decrypt($id);
        $activity = Activity::findOrFail($decrypt);
        return response()->json([
            'success' => true,
            'message' => 'activity berhasil dikembalikan.',
            'data' => $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        // Validasi data
        $request->validate([
            'title'        => 'required|string|max:255',
            'position'    => 'required',
        ]); 

        // Proses file image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($activity->image && Storage::disk('public')->exists($activity->image)) {
                Storage::disk('public')->delete($activity->image);
            }
            
            // Simpan image baru
            $data['image'] = $request->file('image')->store('activities', 'public');
        } else {
            $imagePath = $activity->image; // pakai yang lama jika tidak upload baru
        }
        
        $update = $activity->update([
            'title'       => $request->title,
            'position'    => $request->position,
            'image'       => $imagePath,
            'updated_at'  => now(),
        ]);
    
        if($update){

            return redirect()->route('admin.activities')->with('success', 'activity berhasil diperbarui!');
        }else {
            return redirect()->route('admin.activities')->with('error', 'activity gagal diperbarui!');
            
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $activity = Activity::find($id);
        $deleted = $activity->delete();
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

    public function publishActivity($id)
    {
       $updated= Activity::where('id',$id)->update(['status'=>'1']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.testimonials')->with('success', 'testimonial berhasil di-publish!');
        } else {
            return redirect()->route('admin.testimonials')->with('error', 'Terjadi kesalahan saat publish testimonial.');
        }
    }

    public function draftTestimonial($id)
    {
       $updated= Activity::where('id',$id)->update(['status'=>'0']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.testimonials')->with('success', 'testimonial berhasil di-arsipkan!');
        } else {
            return redirect()->route('admin.testimonials')->with('error', 'Terjadi kesalahan saat arsip testimonial.');
        }
    }

    public function trashedTestimonial(){
        $testimonials = Activity::onlyTrashed()->paginate(10);
        return view('admin.pages.testimonial.trashed', compact('testimonials'));
    }

    public function restoreTestimonial($id)
    {
    	$testimonial = Activity::onlyTrashed()->where('id',$id);
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
