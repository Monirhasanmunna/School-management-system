@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <!-- <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item px-1">
                            <a class="nav-link" href="{{ route('admission.index') }}">
                                Student Admission List
                            </a>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link" href="{{ route('admission.categories') }}" >
                                Student Categories List
                            </a>
                        </li>

                    </ul> -->

                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admission.index') }}" id="nav-hov">
                                Admission
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#" id="nav-hov">
                                Student List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="# id="nav-hov">
                                Update Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                Migration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                Birthday Wish
                            </a>
                        </li>
                    </ul>
                </div>         
            </div>
        </nav>

        <div>
            <div class="card new-table">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Student Admission List</h4>
                            <p class="card-description"> Student Admission new List </p>
                        </div>
                        <a class="btn btn-primary" href="{{ route('admission.create') }}" style="
                        height:35px">Add a new student</a>
                    </div>
                    <div class="content-wrapper text-primary">
                        <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> #SL </th>
                                    <th> Name </th>
                                    <th> Roll No </th>
                                    <th> Mobile Number </th>
                                    <th> Gendar </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admission as $ad)
                                    <tr>
                                        <td> {{$loop->index}}</td>
                                        <td> {{$ad->name}} </td>
                                        <td>
                                            {{$ad->roll_no}}
                                        </td>
                                           <td>
                                            {{$ad->mobile_number}}
                                        </td>
                                        <td> {{$ad->gender}} </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Student Found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            $('#customTable').DataTable();
        });
    </script>
@endsection
