<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{

    public function index(){
        $branches = Branch::all();
        return view('admin.teachers.branch.index',compact('branches'));
    }

    public function create(){
        return view('admin.teachers.branch.create');
    }

    public function store(Request $request){
        $branch =  new Branch;
        $branch->title = $request->title;
        $branch->save();
        return redirect()->route('branch.index')
                        ->with('success','Branch created successfully.');


    }

    public function edit($id){
        $branch = Branch::find($id);
        return view('admin.teachers.branch.edit',compact('branch'));
    }

    public function update (Request $request){
        $id = $request->id;
        $branch = Branch::find($id);
        $branch->title = $request->title;
        $branch->save();
        return redirect()->route('branch.index')
                        ->with('success','Branch update successfully.');


    }
}
