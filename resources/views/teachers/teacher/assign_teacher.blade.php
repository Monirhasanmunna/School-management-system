@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('branch.index') }}" id="nav-hov">
                                Add Branch
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('designation.index') }}" id="nav-hov">
                                Designation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('teacher.index') }}" id="nav-hov">
                                Teachers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                Stuffs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                Committee
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                Blank Sheet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('assign_teacher.index') }}" id="nav-hov">
                                Assign Teachers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav-hov">
                                ID Card
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
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('assign_teacher.store')}}" method="post">
                            @csrf
                            <div>
                                <div class="row">
                                    <div class="col">  
                                        <label> Select Teacher</label>
                                        <select name="teacher_id" class="form-control " >
                                            <option>Select Teacher</option>
                                            @foreach($teachers as $teacher)
                                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col"> <label >Select Class</label>
                                        <select name="class_id" class="form-control">
                                            <option>Select Class</option>
                                            @foreach($classes as $class)
                                            <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
        
                            <button type="submit" class="btn btn-primary mt-3 float-end">
                                <i class="mdi mdi-content-save-settings"></i>
                                Proccess
                            </button>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Teacher Assign List</h4>
                                <p class="card-description"> List for details where a teacher assigned </p>
                            </div>
                            {{-- <a href="{{ route('teacher.create') }}" class="btn btn-primary mr-2" style="width: 175px;height: 34px;">Add New Teacher</a> --}}
                        </div>
                        
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>designation</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp
                                    @foreach ($assign_teacher as $teacher)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $teacher->teacher->name }}</td>
                                            <td>{{ $teacher->teacher->designation->title }}</td>
                                            <td>{{ $teacher->ins_class->name }} - {{ $teacher->ins_class->code }}</td>
                                            <td>{{ $teacher->section ? $teacher->section : 'Null' }}</td>
                                            <td>
                                                <a class="" href="{{ route('teacher.edit',['id' => $teacher->id]) }}" data-toggle="tooltip" data-placement="right" title="Update Teacher Record">
                                                    <i class="mdi mdi-pencil-box" style="font-size: 31px"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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