@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
    <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('attendance.index')}}" id="nav-hov">
                                Teacher Attend.
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Student Attend.
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Manual Attendance
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                ID Mapping
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Device Seeting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Attend. Blank Sheet
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
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Teacher Attendance List</h4>
                            <p class="card-description"> Teachers attendance record list here, </p>
                        </div>
                        {{-- data-toggle="modal" data-target="#exampleModal" --}}
                        <button type="button" class="btn btn-primary mr-2" style="width: 175px;height: 34px;">Teacher Attendance
                        </button>
                    </div>
                    <div class="content-wrapper text-primary">
                        <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> #SL </th>
                                    <th> Name </th>
                                    <th> Designation </th>
                                    <th> Date & Time </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                               
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
                        <h5 class="modal-title" id="exampleModalLabel">Create Attendance Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Date:</label>
                                <input type="datetime-local" class="form-control" name="title" id="sessionTitle">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" onclick="return false;"   >Submit</button>
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
