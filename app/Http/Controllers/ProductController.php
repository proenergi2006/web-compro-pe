<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10); // Ambil semua data dari tabel products
        return view('admin.pages.product.products', compact('products'));
    }

    public function getData()
    {
    $products = Product::all();

    $data = $products->map(function ($product,$index) {

        return [
             'no' => $index + 1, 
            'name' => $product->name,
            'description' => $product->description,
            'image' => asset('storage/' . $product->image)?? '',
            'quote' => $product->quote,
            'action' => '<div class="d-flex gap-1">
                        <button class="btn btn-sm btn-primary btn-show" data-id="' . $product->id . '" title="Detail"><i class="align-middle" data-feather="search"></i></button>
                        <a href="' . route('edit.product', $product->id) . '" class="btn btn-sm btn-info" title="Edit product"><i class="align-middle" data-feather="edit"></i></a>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="' . $product->id . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
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
        return view('admin.pages.product.add');
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
            'description' => 'required',
            'quote'       => 'required',
        ]);
    
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            // Ini akan menyimpan file ke storage/app/public/thumbnails
        }
    
        $save =Product::create([
            'name'     => $request->name,
            'slug'     => Str::slug($request->name),
            'description' => $request->description,
            'quote'   => $request->quote,
            'image'   => $imagePath,
            'created_at' => now(),
        ]);
    
        if($save){
            return redirect()->route('admin.products')->with('success', 'Produk berhasil disimpan!');
        }else{
            return redirect()->route('admin.products')->with('error', 'Produk gagal disimpan!');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        return response()->json([
            'success' => true,
            'message' => 'product berhasil dikembalikan.',
            'data' => $product
        ]);
        // return view('admin.pages.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.pages.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
          // Validasi data
          $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'quote' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

        // Ambil data dari request
        // $data = $request->only(['title', 'content']);
        // $data['slug'] = Str::slug($request->title); // Slug otomatis berdasarkan title
        // $data['status'] = 0; 

        // Proses file image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            
            // Simpan image baru
            $data['image'] = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $product->image; // pakai yang lama jika tidak upload baru
        }
        
        $update = $product->update([
            'name'     => $request->name,
            'description'   => $request->description,
            'quote'   => $request->quote,
            'image' => $imagePath,
            'updated_at' => now(),
        ]);
    
        if($update){

            return redirect()->route('admin.products')->with('success', 'Product berhasil diperbarui!');
        }else {
            return redirect()->route('admin.products')->with('error', 'Product gagal diperbarui!');
            
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $deleted = $product->delete();
        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Product berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Product gagal dihapus.'
            ]);
        }
    }

    public function draftArticle($id)
    {
       $updated= Product::where('id',$id)->update(['status'=>'0']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.products')->with('success', 'Artikel berhasil di-arsipkan!');
        } else {
            return redirect()->route('admin.products')->with('error', 'Terjadi kesalahan saat arsip artikel.');
        }
    }

    public function trashedArticle(){
        $products = Product::onlyTrashed()->paginate(10);
        return view('admin.pages.article.trashed', compact('products'));
    }

    public function restoreArticle($id)
    {
    	$product = Product::onlyTrashed()->where('id',$id);
    	$restore= $product->restore();
        if ($restore) {
            return response()->json([
                'success' => true,
                'message' => 'Product berhasil dikembalikan.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Product gagal dikembalikan.'
            ]);
        }
    }
}
