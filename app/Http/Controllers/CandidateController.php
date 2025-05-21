<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

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
        $candidates = Vacancy::with('candidates')->find($id);
        return view('admin.pages.candidate.candidates', compact('candidates'));
    
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
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:16',
        'location' => 'required|string|max:255',
        'education' => 'required|string|max:255',
        'major' => 'required|string|max:255',
        'experience' => 'required|string',
        'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        Candidate::create([
            'id_vacancy' => $request->id_vacancy,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'education' => $request->education,
            'major' => $request->major,
            'experience' => $request->experience,
            'cv_path' => $cvPath,
            'created_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
    }

      public function getData(Request $request)
        {
            $id= $request->id_vacancy;
            $decrypt= Crypt::decrypt($id);
            $candidates = Candidate::where('id_vacancy', $decrypt)->with('vacancy')->get();

            $data = $candidates->map(function ($candidate) {

            $encrypt= Crypt::encrypt($candidate->id);
            return [
                'id' => $candidate->id,
                'title' => $candidate->vacancy->title,
                'name' => $candidate->name,
                'education' => $candidate->education,
                'created_at' => $candidate->created_at? $candidate->created_at->format('d M Y') : '-',
                'action' => '<div class="d-flex gap-1">
                        <a href="' . route('edit.article', $encrypt) . '" class="btn btn-sm btn-info" title="Edit candidate"><i class="align-middle" data-feather="edit"></i></a>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="' . $encrypt . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
                        <a href="'. route('show.article',$encrypt).'" class="btn btn-sm btn-primary" title="publish"><i class="align-middle" data-feather="send" ></i></a>
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
    public function show(Candidate $candidate)
    {
        //
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
