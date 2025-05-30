<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
