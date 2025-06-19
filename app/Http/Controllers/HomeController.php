<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }

     public function profile()
    {
       $id = Auth::id(); // Ambil ID user yang sedang login
    $user = User::find($id); // Ambil data user dari database

    return view('admin.pages.profile', compact('user'));
    }

    public function userManagement()
    {
        return view('admin.pages.userAdd'); // you can change the path here
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required'],
        ]);

        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('user.management')->with('success', 'User berhasil dibuat!');
    }

    public function getData()
    {
        $users = User::get();

        $data = $users->map(function ($user,$index) {

            return [
                'no' => $index + 1, 
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
            ];
        });

        return response()->json(['data' => $data]);
    }
     public function dashboard()
    {
     
        $role = auth()->user()->role;
        $data = [];

        if ($role === 'admin') {
             $data['article_published']  = Article::where('status', 1)->count();
             $data['article_drafted'] = Article::where('status', 0)->count();
             $data['vacancy_published'] = Vacancy::where('status', 1)->count();
             $data['vacancy_drafted'] = Vacancy::where('status', 0)->count();
        } elseif ($role === 'article') {
             $data['total_published'] = Article::where('status', 1)->count();
             $data['total_drafted'] = Article::where('status', 0)->count();
        } elseif ($role === 'hr') {
            $data['total_published'] = Vacancy::where('status', 1)->count();
            $data['total_drafted'] = Vacancy::where('status', 0)->count();
            $data['total_candidate'] = Candidate::count();
        }
        return view('admin.pages.dashboard', compact('data'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'], // uses new_password_confirmation
        ]);

        $user = Auth::user();

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'current password does not match']);
        }

        // Update new password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password successfully updated.');
    }
}
