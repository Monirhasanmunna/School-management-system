@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('branch.index') }}" id="nav-hov">
                                Students
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Migration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Admission
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Update 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Birthday Wish

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <div class="card new-table">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Student List</h4>
                                <p class="card-description"> Student new List </p>
                            </div>
                            <a href="{{ route('student.create') }}" class="btn btn-primary mr-2" style="width: 175px;height: 34px;">Add New Student</a>
                        </div>
                        
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Roll</th>
                                        <th>Admission Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Safa Rehman</td>
                                            <td>9</td>
                                            <td>07</td>
                                            <td>21.12.2020</td>
                                            <td>
                                                <a class="" href="#" data-toggle="tooltip" data-placement="right" title="Update Teacher Record">
                                                    <i class="mdi mdi-pencil-box" style="font-size: 31px"></i>
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
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