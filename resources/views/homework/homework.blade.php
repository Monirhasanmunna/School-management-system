@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('homework.index') }}" id="nav-hov">
                               Home Work List
                            </a>
                        </li>
                        

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                               Create Home Work
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unc_message') }}" id="nav-hov">
                               Home Work Notice
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
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Home Work List</h4>
                                <p class="card-description">  Home Work New List </p>
                            </div>
                            <a href="#" class="btn btn-primary mr-2" style="width: 175px;height: 34px;">Create New</a>
                        </div>
                        
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Student Name</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Home Work</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                        <td>1</td>
                                            <td>Abir</td>
                                            
                                            <td>A</td>
                                            <td>B</td>
                                            <td>Home Work</td>
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

