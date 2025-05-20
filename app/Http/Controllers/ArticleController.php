<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user')->latest()->paginate(10); // Ambil semua data dari tabel articles
        return view('admin.pages.article.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.article.add');
    }


    public function getData()
    {
    $articles = Article::with('user')->latest()->get();

    $data = $articles->map(function ($article) {

        $status = '';
        if ($article->status == '0') {
            $status = '<span class="badge bg-warning">Draft</span>';
        }else if($article->status == '1'){
            $status = '<span class="badge bg-success">Published</span>';
        } else {
            $status = '<span class="badge bg-danger">Archieved</span>';
        }

        $encrypt= Crypt::encrypt($article->id);
        return [
            'id' => $article->id,
            'title' => $article->title,
            'slug' => $article->slug,
            'thumbnail' => asset('storage/' . $article->thumbnail)?? '',
            'content' => $article->content,
            'user' => $article->user->name ?? 'No User',
            'status' => $status, 
            'created_at' => $article->created_at? $article->created_at->format('d M Y') : '-',
            'action' => '<div class="d-flex gap-1">
                    <a href="' . route('edit.article', $encrypt) . '" class="btn btn-sm btn-info" title="Edit Article"><i class="align-middle" data-feather="edit"></i></a>
                      <button class="btn btn-sm btn-danger btn-delete" data-id="' . $article->id . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
                    <a href="'. route('show.article', $article->slug).'" class="btn btn-sm btn-primary" title="publish"><i class="align-middle" data-feather="send" ></i></a>
                </div>'
        ];
    });

    return response()->json(['data' => $data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);
    
        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
            // Ini akan menyimpan file ke storage/app/public/thumbnails
        }
    
        Article::create([
            'title'     => $request->title,
            'slug'     => Str::slug($request->title),
            'status'   => 0,
            'thumbnail'   => $thumbnailPath,
            'content'   => $request->content,
            'created_by'   => $id,
            'created_at'   => now()
        ]);
    
        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('admin.pages.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypt=Crypt::decrypt($id);
        $article = Article::findOrFail($decrypt);
        return view('admin.pages.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Ambil data dari request
        // $data = $request->only(['title', 'content']);
        // $data['slug'] = Str::slug($request->title); // Slug otomatis berdasarkan title
        // $data['status'] = 0; 

        // Proses file thumbnail jika ada
        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama jika ada
            if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            
            // Simpan thumbnail baru
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        } else {
            $thumbnailPath = $article->thumbnail; // pakai yang lama jika tidak upload baru
        }
        
        $article->update([
            'title'     => $request->title,
            'content'   => $request->content,
            'slug'      => Str::slug($request->title),
            'status'    => '0',
            'thumbnail' => $thumbnailPath,
            'updated_at' => now(),
        ]);
    
        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil diperbarui!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $deleted = $article->delete();
        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Artikel berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Artikel gagal dihapus.'
            ]);
        }

    }

    public function publishArticle($id)
    {
       $updated= Article::where('id',$id)->update(['status'=>'1']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.articles')->with('success', 'Artikel berhasil di-publish!');
        } else {
            return redirect()->route('admin.articles')->with('error', 'Terjadi kesalahan saat publish artikel.');
        }
    }

    public function draftArticle($id)
    {
       $updated= Article::where('id',$id)->update(['status'=>'0']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.articles')->with('success', 'Artikel berhasil di-arsipkan!');
        } else {
            return redirect()->route('admin.articles')->with('error', 'Terjadi kesalahan saat arsip artikel.');
        }
    }

    public function trashedArticle(){
        $articles = Article::onlyTrashed()->paginate(10);
        return view('admin.pages.article.trashed', compact('articles'));
    }

    public function restoreArticle($id)
    {
    	$article = Article::onlyTrashed()->where('id',$id);
    	$restore= $article->restore();
        if ($restore) {
            return response()->json([
                'success' => true,
                'message' => 'Artikel berhasil dikembalikan.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Artikel gagal dikembalikan.'
            ]);
        }
    }
}
