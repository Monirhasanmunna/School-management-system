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
                        <a class="nav-link" href="#" id="nav-hov">
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
                    <form action="{{route('branch.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="branch_name" style="color: black">Branch Name</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Branch" name="title" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection
