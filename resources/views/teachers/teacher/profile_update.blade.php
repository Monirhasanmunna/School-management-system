@extends('admin.layouts.app')

@section('content')
    <div  class="main-panel">
        <div class="container rounded bg-white" style="margin-top: 1.5rem">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">{{ $teacher->name }}</span>
                        <span class="text-black-50">{{ $teacher->email }}</span>
                        <span> </span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="first name" value="{{ $teacher->name }}">
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" placeholder="enter email id" value="{{ $teacher->email }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="number" class="form-control" placeholder="enter phone number" value="{{ $teacher->mobile_number }}"></div>
                            <div class="col-md-12">
                                <label class="labels">Present Address</label>
                                <textarea name="present_address" class="form-control" id="" rows="2">{!! $teacher->present_address !!}</textarea>
                                
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Permanent Address</label>
                                <textarea name="permanent_address" class="form-control" id="" rows="2">{!! $teacher->permanent_address !!}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">NID</label>
                                <input type="number" name="nid" class="form-control" placeholder="19951239876" value="{{ $teacher->nid }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Joining Date</label>
                                <input type="date" class="form-control" value="{{ $teacher->joining_date}}">
                            </div>
                            {{-- <div class="col-md-12">
                                <label class="labels">Area</label>
                                <input type="text" class="form-control" placeholder="enter address line 2" value="">
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <label class="labels">Education</label>
                                <input type="text" class="form-control" placeholder="education" value="">
                            </div> --}}
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                        </div> --}}
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection