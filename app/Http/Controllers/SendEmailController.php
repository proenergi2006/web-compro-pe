<?php

namespace App\Http\Controllers;

// use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('company.pages.contact');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Simpan ke database
        Messages::create($validated);

        // Kirim email
        Mail::to($request->email)->send(new SendEmail($validated));

        // dispatch(new SendEmail($validated));
        // return redirect()->back()->with('status', 'Email berhasil dikirim!');
         return response()->json(['message' => 'Email sent successfully']);
    }
}