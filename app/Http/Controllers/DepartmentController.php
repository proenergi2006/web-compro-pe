<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::paginate(10); // Ambil semua data dari tabel products
        return view('admin.pages.department.department', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.department.add');
    }

    public function getData()
    {
    $departments = Department::get();

    $data = $departments->map(function ($department,$index) {

        return [
            'no' => $index + 1, 
            'name' => $department->name,
            'action' => '<div class="d-flex gap-1">
                    <a href="#" class="btn btn-sm btn-info btn-edit" title="Edit department" data-id="' . $department->id . '" ><i class="align-middle" data-feather="edit"></i></a>
                      <button class="btn btn-sm btn-danger btn-delete" data-id="' . $department->id . '" title="Delete"><i class="align-middle" data-feather="trash-2"></i></button>
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
            'name' => 'required|string|max:255'
        ]);

        $department= Department::create([
            'name' => $request->name
        ]);

            return response()->json(['message' => 'success']);
        // if($department){
        //     return response()->json(['message' => 'Department berhasil disimpan.']);
        // }else{
        //     return response()->json(['message' => 'Department gagal disimpan.']);
        // }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::where('id', $id)->firstOrFail();

        return response()->json([
            'success' => true,
            'message' => 'department berhasil dikembalikan.',
            'data' => $department
        ]);
        // return view('admin.pages.product.show', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $update= $department->update([
            'name' => $request->name
        ]);

        if($update){
            return response()->json(['message' => 'Department berhasil diubah.']);
        }else{
            return response()->json(['message' => 'Department gagal diubah.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $deleted = $department->delete();
        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Department berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Department gagal dihapus.'
            ]);
        }
    }
}
