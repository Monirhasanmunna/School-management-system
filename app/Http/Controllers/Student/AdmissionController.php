<?php

namespace App\Http\Controllers\Api\V1\Student;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Designation;
use App\Models\Group;
use App\Models\InsClass;
use App\Models\Section;
use App\Models\Session;
use Illuminate\Http\Request;
use DB;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admission = Admission::latest()->get();
        return view('student', compact('admission'));
    }

    public function category()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academic_years = Session::all();
        $classes = InsClass::all();
        $table_number = 0;
        return view('student.insert_student',compact('academic_years','classes','table_number'));
    }

    public function getNumberOfTable(Request $request){
        $academic_years = Session::all();
        $classes = InsClass::all();

        $table_number = $request->table_number;
        // $table_number = $data['table_number'];
         $year = $request->academic_year;
        $academic_class = $request->classes;

         return view('student.insert_student',compact('year','academic_class','table_number','academic_years','classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // // return $request->all();
        // $admissionCreate = Admission::create($request->all());
        // $admission = Admission::latest()->get();

        if(!empty($request['check'])){
            $count_array = count($request['check']);
            for($i=0;$i<$count_array; $i++){
                $admissionCreate = new Admission();
                $admissionCreate->roll_no = $request['roll_no'][$i];
                $admissionCreate->name = $request['name'][$i];
                $admissionCreate->father_name = $request['father_name'][$i];
                $admissionCreate->mother_name = $request['mother_name'][$i];
                $admissionCreate->mobile_number = $request['mobile_number'][$i];
                $admissionCreate->religion = $request['religion'][$i];
                $admissionCreate->gender = $request['gender'][$i];
                $admissionCreate->class_id = $request['academic_class'][$i];
                $admissionCreate->session_id = $request['academic_year'][$i];
                $admissionCreate->save();
            }
        }else{
            return view('student.insert_student', compact('admission'));
        }


             return redirect()->route('admission.index')
                            ->with('success','Students added successfully.');
    }

    public function section(Request $request)
    {
      $section = $request->section;
      $group = $request->group;
      $category = $request->category;
      $ids = $request->ids;

    //   array convert string
      $string = implode(" ", $ids);
    //   string  without coma
    //   $string_replace_without_coma = str_replace(',', '', $string);
    //   string convert array
    //   $split = str_split($string_replace_without_coma, 1);

     $split =  explode (",", $string);

    //   dd($split);


      if($section){
          DB::table('admissions')->whereIn('id', $split)->update(array('section_id' => $section));
      }
      if($group){
         DB::table('admissions')->whereIn('id', $split)->update(array('group_id' => $group));
      }
      if($category){
         DB::table('admissions')->whereIn('id', $split)->update(array('category_id' => $category));
      }


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sections = Section::all();
        $categoties = Category::all();
        $groups = Group::all();
        $admission = Admission::latest()->with('section','group','category')->get();
        // dd($admission);
        return view('category', compact('admission','sections','categoties','groups'));
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
