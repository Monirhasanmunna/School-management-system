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
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">MCQ List</h4>
                                <p class="card-description"> Exam MCQ new List </p>
                            </div>
                            <a href="#" class="btn btn-primary mr-2" style="width: 175px;height: 34px;">Create New</a>
                        </div>
                        
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Total MCQ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>B</td>
                                            <td>10</td>
                                            <td>
                                            
                                            <a class="btn btn-sm btn-primary"  href="javascript:void(0)">Edit</a>
                                            <form id="deleteForm" action="" method="Post" style="display: none">
                                                @csrf

                                            </form>
                                            <a class="btn btn-sm btn-danger" onclick="deleteBtn()" href="javascript::void(0)">Delete</a>
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

