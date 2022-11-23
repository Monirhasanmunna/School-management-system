<?php

namespace App\Http\Controllers;

use App\Models\{AssignTeacher,AssignTeacherSbuject,Session,InsClass,Teacher};
use Illuminate\Http\Request;
use DB;

class AssignTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assign_teacher = AssignTeacher::with([
            'teacher','ins_class','shift','section'
        ])
        ->latest()
        ->get();
        $teachers = Teacher::get();
        $academic_years = Session::get();
        $classes = InsClass::get();
        return view('admin.teachers.teacher.assign_teacher',[
            'classes'=> $classes,
            'academic_years' => $academic_years,
            'teachers' => $teachers,
            'assign_teacher' => $assign_teacher,
        ]);
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
    public function store(Request $request)
    {
        // return $request->all();
        try {
            DB::beginTransaction();

            $data['teacher_id'] = $request->teacher_id;
            $data['class_id'] = $request->class_id;
            $data['shift_id'] = $request->shift_id;
            $data['section_id'] = $request->section_id;

            $assign_teacher = AssignTeacher::create($data);

            
            if ($assign_teacher && $request->assign_subjects) {
                foreach ($request->assign_subjects as $key => $value) {
                    $assign_teacher_subject = new AssignTeacherSbuject();
                    $assign_teacher_subject->assign_teacher_id = $assign_teacher->id;
                    $assign_teacher_subject->subject_id = $value['subject_id'];
                    $assign_teacher_subject->save();
                }
            }
            DB::commit();
            return redirect()->back();
        } catch (\Throwable $th) {
            // DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(AssignTeacher $assignTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignTeacher $assignTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignTeacher $assignTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignTeacher $assignTeacher)
    {
        //
    }
}
