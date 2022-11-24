<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use App\Models\InsClass;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = InsClass::orderBy('id','desc')->get();
        $sections = Section::orderBy('id','desc')->get();
        return view('backend.academic.section.section',compact('sections','classes'));
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
       $request->validate([
        'name'      => 'required',
        'class_id'  => 'required',
       ]);

       Section::create([
        'class_id'  => $request->class_id,
        'name'      => $request->name
       ]);

       return redirect()->route('section.index')->with('success','Section added successfully');

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
        $section = Section::with('class')->findOrfail($id);
        return response()->json($section);
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
        $request->validate([
            'name'      => 'required',
            'class_id'  => 'required',
           ]);
    
           Section::findOrfail($request->section_id)->update([
            'class_id'  => $request->class_id,
            'name'      => $request->name
           ]);
    
        return redirect()->route('section.index')->with('success','Section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::findOrfail($id)->delete();
        return redirect()->route('section.index')->with('success','Section deleted successfully');
    }
}
