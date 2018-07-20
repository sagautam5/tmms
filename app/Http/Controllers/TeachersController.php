<?php

namespace App\Http\Controllers;

Use App\Teacher;
Use App\Faculty;
Use App\Nationality;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;


use App\Repositories\Repository;


class TeachersController extends Controller
{
    protected $model;

    public function __construct(Teacher $teacher){
        // set the model
       $this->model = new Repository($teacher);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // All Teachers 
        $teachers = $this->model->all();

        return view('teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        $nationalities = Nationality::all();
        
        return view('teacher.create',compact('faculties','nationalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        // store new faculty to database
        if($this->model->create($request->all()))
        {
            return redirect()->to('/teachers')->with('alert-success','Teacher added successfully !');
        }

        else
        {
            return redirect()->back()->with('alert-danger','Something went wrong !');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
}
