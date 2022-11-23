<?php

namespace App\Http\Controllers;

use App\Models\InsClass;
use App\Models\Shift;
use App\Models\Category;
use App\Models\Section;
use App\Models\Group;
use App\Http\Requests\StoreInsClassRequest;
use App\Http\Requests\UpdateInsClassRequest;

class InsClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insclass')->with([
            'classes'=> InsClass::latest()->get()
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
     * @param  \App\Http\Requests\StoreInsClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsClassRequest $request)
    {
        // return $request->all();
        InsClass::create($request->all());
        return redirect()->route('classes.index')->with('success', 'Class created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsClass  $insClass
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // table list start
        $shifts = Shift::where('ins_class_id',$id)->get();
        $categories = Category::where('ins_class_id',$id)->get();
        $sections = Section::where('ins_class_id',$id)->get();
        $groups = Group::where('ins_class_id',$id)->get();
        // table list end

        $class_name = InsClass::find($id);

        return view('class-config')->with([
            'id'=> $id,
            'class_name'=>$class_name,
            'shifts'=>$shifts,
            'categories'=>$categories,
            'sections'=>$sections,
            'groups'=>$groups
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsClass  $insClass
     * @return \Illuminate\Http\Response
     */
    public function edit(InsClass $insClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsClassRequest  $request
     * @param  \App\Models\InsClass  $insClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsClassRequest $request, InsClass $insClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsClass  $insClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsClass $insClass)
    {
        //
    }
}
