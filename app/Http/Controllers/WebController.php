<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Vacancy;
use App\Models\Department;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class WebController extends Controller
{
    
    public function index()
    {
        $articles = Article::where('status', 1)->latest()->limit(5)->get();
        return view('company.pages.onepage',compact('articles'));
    }
    
    public function articles()
    {
        $articles = Article::where('status', 1)->latest()->paginate(5);
        $articles_old = Article::where('status', 1)->oldest()->limit(5)->get();
        return view('company.pages.articles',compact('articles','articles_old'));
    }

    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $latests = Article::where('status', 1)->latest()->limit(5)->get();
        return view('company.pages.article-detail', compact('article','latests'));
    }

    public function searchArticle(Request $request)
    {
        $query = $request->input('q');

        $articles = Article::where('status', 1)
        ->where(function ($q) use ($query) {
            $q->where('title', 'like', "%$query%")
              ->orWhere('content', 'like', "%$query%");
        })
        ->latest()
        ->paginate(5);
        // dd($articles);
        $articles_old = Article::where('status', 1)->oldest()->limit(5)->get();
        return view('company.pages.articles', compact('articles', 'articles_old','query'));
    }

    public function vacancies()
    {
        $vacancies = Vacancy::with('department')
        ->where('status', 1)
        ->where('due_date', '>=', Carbon::today())
        ->latest()
        ->paginate(10);
        $testimonials = Testimonial::where('status', 1)->latest()->limit(5)->get();
        return view('company.pages.careers',compact('vacancies','testimonials'));
    }

    public function showVacancy($slug)
    {
        $vacancy = Vacancy::where('slug', $slug)->firstOrFail();
        return view('company.pages.career-detail', compact('vacancy'));
    }

}
