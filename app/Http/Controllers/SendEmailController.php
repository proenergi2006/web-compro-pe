<?php

namespace App\Http\Controllers;

// use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
use App\Mail\SendEmailInternal;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('company.pages.contact');
    }

    public function store(Request $request, $locale = 'en')
    {
        //  app()->setLocale($locale);
        App::setLocale($locale); 
        // $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Simpan ke database
        // Messages::create($validated);

        // Kirim email
        $contact='';
        if($request->subject == 'Career'){
            $contact ='hrd@proenergi.com';
        }else{
            $contact = ['info@proenergi.com','customer.service@proenergi.com'];
        }

        Mail::to($request->email)->send(new SendEmail($validated));
        Mail::to($contact)->send(new SendEmailInternal($validated));

        // dispatch(new SendEmail($validated));
        // return redirect()->back()->with('status', 'Email berhasil dikirim!');
         return response()->json(['message' => 'Email sent successfully']);
        // return response()->json([
        //     'message' => __('messages.thank_you')
        // ]);
    }

}