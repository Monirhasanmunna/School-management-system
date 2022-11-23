<?php

namespace App\Repositories\Teacher;

use App\Models\Teacher;
use App\Models\Branch;
use App\Models\Designation;

class TeacherRepository implements TeacherInterface
{

    public function index()
    {
        // TODO: Implement index() method.
        // return Teacher::all();   
        $teachers = Teacher::with(
                [
                'designation:id,title',
                'branch:id,title'
                ]
            )
            ->get();

        return view('admin.teachers.teacher.index',compact('teachers'));
    }

    public function create()
    {
        $branches = Branch::all();
        $designations = Designation::all();
          $table_number = 1;
        return view('admin.teachers.teacher.create',compact('branches','designations','table_number'));
    }

    public function store(array $data)
    {

        // dd($data);
        // dd(count($data['name']));
        // dd($data['name'][1]);


        if(!empty($data['check'])){
        $count_array = count($data['check']);
        for($i=0;$i<$count_array; $i++){
            $teacher = new Teacher;
            $teacher->name = $data['name'][$i];
            $teacher->mobile_number = $data['mobile_number'][$i];
            $teacher->designation_id = $data['designation_id'][$i];
            $teacher->branch_id = $data['branch_id'][$i];
            $teacher->save();
        }
    }else{
         return redirect()->route('teacher.index');
    }


         return redirect()->route('teacher.index')
                        ->with('success','Teacher update successfully.');
    }


    public function getNumberOfTable(array $data){

        $table_number = $data['table_number'];
         $branches = Branch::all();
        $designations = Designation::all();
         return view('admin.teachers.teacher.create',compact('branches','designations','table_number'));
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $teacher = Teacher::find($id);

        return view('admin.teachers.teacher.profile_update',compact('teacher'));
    }

    public function show($id)
    {
        // TODO: Implement edit() method.
        // return Teacher::find($id);
        $teacher = Teacher::find($id);
        return response()->json([
            'data' => $teacher,
            'status' => '200',
            'message' => 'success'

        ]);
    }



    public function update(array $data)
    {

        // TODO: Implement update() method.
        $teacher = Teacher::find($data['id']);
        $teacher->uu_id = $data['uu_id'];
        $teacher->branch_id = $data['branch_id'];
        $teacher->designation_id = $data['designation_id'];
        $teacher->name = $data['name'];
        $teacher->father_name = $data['father_name'];
        $teacher->mother_name = $data['mother_name'];
        $teacher->gender = $data['gender'];
        $teacher->nid = $data['nid'];
        $teacher->date_of_birth = $data['date_of_birth'];
        $teacher->mobile_number = $data['mobile_number'];
        $teacher->joining_date = $data['joining_date'];
        $teacher->blood_group = $data['blood_group'];
        $teacher->email = $data['email'];
        $teacher->present_address = $data['present_address'];
        $teacher->permanent_address = $data['permanent_address'];
        $teacher->photo = $data['photo'];
        $teacher->socila_media_link = $data['socila_media_link'];
        if ($teacher->save()) {
            return response()->json([
                'data' => $teacher,
                'status' => 200,
                'message' => 'Update Successfully'
            ]);
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        return Teacher::destroy($id);
    }
}
