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
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Designation List</h4>
                                <p class="card-description"> Designation new List </p>
                            </div>
                            <button type="button" class="btn btn-primary mr-2" style="width: 175px;height: 34px;"
                                    data-toggle="modal" data-target="#exampleModal">Create Designation
                            </button>
                        </div>
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp
                                    @foreach($designations as $designation)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$designation->title}}</td>
                                    <td><label class="badge badge-info">{{ ($designation->status == 1) ? "Active" : "Not-Active" }}</label></td>
                                    <td><a class="badge badge-success" href="{{route('designation.edit',['id'=>$designation->id])}}">Edit</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Designation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('designation.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Designation Name:</label>
                                <input type="test" class="form-control" name="title" id="sessionTitle">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
