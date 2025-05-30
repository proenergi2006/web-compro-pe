<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Province;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::with('department')->latest()->paginate(10); // Ambil semua data dari tabel products
        return view('admin.pages.vacancy.vacancies', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $provinces = Province::all();
        return view('admin.pages.vacancy.add',compact('departments','provinces'));
    }

    public function getData()
    {
    $vacancies = Vacancy::with('department')->latest()->get();
    // dd($vacancies);

    $data = $vacancies->map(function ($vacancy,$index) {

        $status = '';
        if ($vacancy->status == '0') {
            $status = '<span class="badge bg-warning">Draft</span>';
        }else if($vacancy->status == '1'){
            $status = '<span class="badge bg-success">Published</span>';
        } else {
            $status = '<span class="badge bg-danger">Archieved</span>';
        }
        $encrypt= Crypt::encrypt($vacancy->id);
        return [
             'no' => $index + 1, 
            'title' => $vacancy->title,
            'dept' => $vacancy->department->name,
            'due_date' => $vacancy->due_date->format('d M Y'),
            'status' => $status,
            'action' => '<div class="d-flex gap-1">
                    <a href="' . route('edit.vacancy', $encrypt) . '" class="btn btn-sm btn-info" title="Edit vacancy"><i class="align-middle" data-feather="edit"></i></a>
                      <button class="btn btn-sm btn-danger btn-delete" data-id="' . $vacancy->id . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
                    <a href="'. route('show.vacancy', $vacancy->slug).'" class="btn btn-sm btn-primary" title="publish"><i class="align-middle" data-feather="send" ></i></a>
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
        $request->validate([
            'title' => 'required|string|max:255',
            'department_id' => 'required',
            'location_id' => 'required',
            'description' => 'required',
            'min_year' => 'required',
            'employee_status' => 'required',
            'requirement' => 'required',
            'due_date' => 'required'
        ]);

        $vacancy= Vacancy::create([
            'title' => $request->title,
            'slug'      => Str::slug($request->title),
            'id_dept' => $request->department_id,
            'id_prov' => $request->location_id,
            'status' => 0,
            'min_year' => $request->min_year,
            'employee_status' => $request->employee_status,
            'description' => $request->description,
            'requirement' => $request->requirement,
            'due_date' => $request->due_date,
            'created_at' => now()

        ]);

        if($vacancy){
            return redirect()->route('admin.vacancies')->with('success', 'Lowongan pekerjaan berhasil disimpan!');
        }else{
            return redirect()->route('admin.vacancies')->with('error', 'Lowongan pekerjaan gagal disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $vacancy = Vacancy::where('slug', $slug)->firstOrFail();

        return view('admin.pages.vacancy.show', compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypt=Crypt::decrypt($id);
        $vacancy = Vacancy::findOrFail($decrypt);
        $departments = Department::all();
        $provinces = Province::all();
        return view('admin.pages.vacancy.edit', compact('vacancy','departments','provinces'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
       // Validasi data
       $request->validate([
            'title' => 'required|string|max:255',
            'department_id' => 'required',
            'description' => 'required',
            'requirement' => 'required',
            'due_date' => 'required'
        ]);

        $update=$vacancy->update([
            'title' => $request->title,
            'slug'      => Str::slug($request->title),
            'id_dept' => $request->department_id,
            'status' => 0,
            'description' => $request->description,
            'requirement' => $request->requirement,
            'due_date' => $request->due_date,
            'created_at' => now()

        ]);
        
        if($update){
            return redirect()->route('admin.vacancies')->with('success', 'Vacancy berhasil diperbarui!');
        }else{
            return redirect()->route('admin.vacancies')->with('error', 'Vacancy gagal diperbarui!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->status = 2;  // Ubah status ke 3
        $vacancy->save();      // Simpan perubahan

        $deleted = $vacancy->delete();
        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'lowongan pekerjaan berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'lowongan pekerjaan gagal dihapus.'
            ]);
        }
    }

    public function publishVacancy($id)
    {
       $updated= Vacancy::where('id',$id)->update(['status'=>'1']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.vacancies')->with('success', 'Lowongan pekerjaan berhasil dipublikasikan!');
        } else {
            return redirect()->route('admin.vacancies')->with('error', 'Terjadi kesalahan saat publikasikan Lowongan pekerjaan.');
        }
    }

    public function draftVacancy($id)
    {
       $updated= Vacancy::where('id',$id)->update(['status'=>'0']);
        // Mengecek apakah update berhasil
        if ($updated) {
            return redirect()->route('admin.vacancies')->with('success', 'Lowongan pekerjaan berhasil diarsipkan!');
        } else {
            return redirect()->route('admin.vacancies')->with('error', 'Terjadi kesalahan saat arsip Lowongan pekerjaan.');
        }
    }
}
