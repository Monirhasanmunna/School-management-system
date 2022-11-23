<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function index(){
        $designations = Designation::all();
        return view('admin.teachers.designation.index',compact('designations'));
    }

    public function create(){
        return view('admin.teachers.designation.create');
    }

    public function store(Request $request){
        $designation = new Designation;
        $designation->title = $request->title;
         $designation->save();
        return redirect()->route('designation.index')
                        ->with('success','Designation created successfully.');

    }

    public function edit($id){
        $designation = Designation::find($id);
        return view('admin.teachers.designation.edit',compact('designation'));

    }

    public function update(Request $request){
        $id = $request->id;
        $designation = Designation::find($id);
        $designation->title = $request->title;
        $designation->save();
        return redirect()->route('designation.index')
                        ->with('success','Branch update successfully.');
    }
}
