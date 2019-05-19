<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\DoctorRequest;

use App\Doctor;
use App\Department;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = $this->getDepartment();
        
        return view('back.admin.addDoctor',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(DoctorRequest $request)
    {
        $saveToDatabase = Doctor::create(
            [
                'name' => $request->name,
                'departmentId' => $request->departmentId,
                'doctorId' => $request->doctorId,
                'doctorUsername' => $request->doctorUsername,
                'password' => $request->password,
            ]);
        
        if(!$saveToDatabase)
            return redirect()->back()->with('error','Can not save to database');
        
        return redirect()->back()->with('success', 'Doctor is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewAllDoctor()
    {
        $doctor = Doctor::get();
        return view('back.admin.viewDoctor',compact('doctor'));
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getDepartment()
    {
        $department = Department::get();
        return $department;
    }
}
