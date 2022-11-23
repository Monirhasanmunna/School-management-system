@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
    <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('session.index') }}" id="nav-hov">
                                Sessions
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('classes.index') }}" id="nav-hov">
                                Class
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"id="nav-hov">
                                Admit Card
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                Seat Plan
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                ID Card
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                Testimonial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                Transfer Certificate
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                Tag for Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                Number Sheet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-hov">
                                Exam Attnd. Sheet
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
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Classes List</h4>
                            <p class="card-description"> All Classes are displayed here </p>
                        </div>
                        <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                            data-toggle="modal" data-target="#exampleModal">Add
                            Class</button>
                    </div>
                    <div class="content-wrapper text-primary">
                        <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Classes </th>
                                    <th> ID Code </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($classes as $key => $c)
                                    <tr>
                                        <td> {{ $loop->index + 1 }}</td>
                                        <td> {{ $c->name }} </td>
                                        <td>
                                            {{ $c->code }}
                                        </td>
                                        <td>
                                            <a href="{{ route('classes.show', $c->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Session Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Class</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('classes.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Class Name:</label>
                                <input type="text" class="form-control" name="name" id="sessionTitle">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Class Code:</label>
                                <input type="number" class="form-control" name="code" id="sessionTitle">
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

