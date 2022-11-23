@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('onlineexam.index') }}" id="nav-hov">
                                Create Exam MCQ
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Add Questions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Create Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                                Result Report
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
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Exam MCQ</h4>
                                <p class="card-description"> Exam MCQ List </p>
                            </div>
                            <a href="{{ route('unc_message') }}" class="btn btn-primary mr-2" style="width: 175px;height: 34px;">Add New MCQ</a>
                        </div>
                        
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Subject</th>
                                        <th>Time</th>
                                        <th>MCQ Qty</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $i=0; @endphp
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $teacher->name }}</td>
                                            <td>{{ $teacher->branch->title }}</td>
                                            <td>{{ $teacher->designation->title }}</td>
                                            <td>{{ $teacher->mobile_number }}</td>
                                            <td>
                                                <a class="" href="{{ route('teacher.edit',['id' => $teacher->id]) }}" data-toggle="tooltip" data-placement="right" title="Update Teacher Record">
                                                    <i class="mdi mdi-pencil-box" style="font-size: 31px"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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