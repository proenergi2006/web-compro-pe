<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailVacancy;
use App\Models\Candidate;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = DB::table('vacancies')
        ->leftjoin('candidates', 'vacancies.id', '=', 'candidates.id_vacancy')
        ->whereNull('vacancies.deleted_at')
        ->select('vacancies.id','vacancies.title','vacancies.due_date', DB::raw('COUNT(candidates.id) as candidate_count'))
        ->groupBy('vacancies.id', 'vacancies.title','vacancies.due_date')
        ->orderBy('vacancies.due_date','desc')
        ->get();
        $candidates =Candidate::with('vacancy')->get();
        return view('admin.pages.candidate.vacancy', compact('candidates','vacancies'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_candidate($id)
    {
        $decrypt= Crypt::decrypt($id);
        $candidates = Vacancy::with('candidates')->find($id);
        $vacancy = Vacancy::where('id', $decrypt)->first();
        return view('admin.pages.candidate.candidates', compact('vacancy',));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $validated= $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email|max:255',
    //     'phone' => 'required|max:16',
    //     'location' => 'required|string|max:255',
    //     'education' => 'required|string|max:255',
    //     'major' => 'required|string|max:255',
    //     'experience' => 'required|string',
    //     'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
    //     ]);

    //     $cvPath = $request->file('cv')->store('cvs', 'public');

    //     Candidate::create([
    //         'id_vacancy' => $request->id_vacancy,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'location' => $request->location,
    //         'education' => $request->education,
    //         'major' => $request->major,
    //         'experience' => $request->experience,
    //         'cv_path' => $cvPath,
    //         'created_at' => now()
    //     ]);

    //     $vacancy = Vacancy::findOrFail($request->id_vacancy); // ambil data vacancy dari DB

    //     // Gabungkan data yang ingin dikirim ke email
    //     $emailData = [
    //         'name' => $validated['name'],
    //         'message' => $validated['message'],
    //         'vacancy_title' => $vacancy->title, // asumsi kolomnya `title`
    //     ];

    //     // Kirim email
    //     Mail::to($validated['email'])->send(new SendEmailVacancy($emailData));
    //     return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
    // }
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:16',
            'location' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'experience' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'id_vacancy' => 'required|exists:vacancies,id',  // validasi id vacancy
            'message' => 'nullable|string' // jika memang ada field message
        ]);

        // Upload file CV ke storage/public/cvs
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // Simpan data kandidat ke database
        $candidate = Candidate::create([
            'id_vacancy' => $validated['id_vacancy'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'location' => $validated['location'],
            'education' => $validated['education'],
            'major' => $validated['major'],
            'experience' => $validated['experience'],
            'cv_path' => $cvPath,
            'created_at' => now(),
        ]);

        // Ambil data vacancy dari DB
        $vacancy = Vacancy::findOrFail($validated['id_vacancy']);

        // Siapkan data email
        $emailData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'vacancy_title' => $vacancy->title,
            'location' => $vacancy->province->name,
        ];

        // Kirim email hanya jika data kandidat berhasil disimpan
        if ($candidate) {
            Mail::to($validated['email'])->send(new SendEmailVacancy($emailData));
        }

        // Kirim response sukses
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan dan email telah dikirim!'
        ]);
    }


      public function getData(Request $request)
        {
            $id= $request->id_vacancy;
            $decrypt= Crypt::decrypt($id);
            $candidates = Candidate::where('id_vacancy', $decrypt)->with('vacancy')->get();

            $data = $candidates->map(function ($candidate, $index) {

            $encrypt= Crypt::encrypt($candidate->id);
            return [
                'no' => $index + 1, 
                'title' => $candidate->vacancy->title,
                'name' => $candidate->name,
                'education' => $candidate->education,
                'major' => $candidate->major,
                'created_at' => $candidate->created_at? $candidate->created_at->format('d M Y') : '-',
                'action' => '<div class="d-flex gap-1">
                        <a href="'. route('show.candidate',$encrypt).'" class="btn btn-sm btn-primary" ><i class="align-middle" data-feather="zoom-in" ></i></a>
                    </div>'
            ];
        });
        return response()->json(['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decrypt= Crypt::decrypt($id);
        $candidate = Candidate::where('id', $decrypt)->firstOrFail();

        return view('admin.pages.candidate.show', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
