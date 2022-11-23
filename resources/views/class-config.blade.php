@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3 nested-menu shadow-sm rounded">
            <div class="container">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-shift-tab" data-toggle="pill" data-target="#pills-shift" type="button" role="tab" aria-controls="pills-shift" aria-selected="true">Shifts</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-category-tab" data-toggle="pill" data-target="#pills-category" type="button" role="tab" aria-controls="pills-category" aria-selected="false">Categories</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-section-tab" data-toggle="pill" data-target="#pills-section" type="button" role="tab" aria-controls="pills-section" aria-selected="false">Sections</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-group-tab" data-toggle="pill" data-target="#pills-group" type="button" role="tab" aria-controls="pills-group" aria-selected="false">Groups</button>
                    </li>
                    </ul>
                </div>
            </div>
              <p style="color: black">Class Name {{$class_name->name}}</p>
        </nav>

        <div class="card new-table">
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">

                    {{-- shift start --}}
                    <div class="tab-pane fade show active" id="pills-shift" role="tabpanel" aria-labelledby="pills-shift-tab">
                       <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Shift List</h4>
                                <p class="card-description">  </p>
                            </div>
                            <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                                data-toggle="modal" data-target="#shiftModal">Add
                                Shifts
                            </button>
                        </div>
                        <div class="content-wrapper text-primary">
                            <table id="customTable3" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($shifts as $shift)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td> {{ $shift->name }} </td>
                                            <td> Edit </td>
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
                    {{-- shift end --}}




                    {{-- category start --}}
                    <div class="tab-pane fade" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Category List</h4>
                                <p class="card-description">  </p>
                            </div>
                            <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                                data-toggle="modal" data-target="#categoryModal">Add
                                Category
                            </button>
                        </div>
                        <div class="content-wrapper text-primary">
                            <table id="customTable1" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td> {{ $category->name }} </td>
                                            <td> Edit </td>
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
                    {{-- catagory end --}}

                    {{-- section start --}}
                     <div class="tab-pane fade" id="pills-section" role="tabpanel" aria-labelledby="pills-section-tab">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Section List</h4>
                                <p class="card-description"></p>
                            </div>
                            <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                                data-toggle="modal" data-target="#sectionModal">Add Section
                            </button>
                        </div>

                        <div class="content-wrapper text-primary">
                            <table id="customTable2" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sections as $section)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td> {{ $section->name }} </td>
                                            <td> Edit </td>
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
                    {{-- section end --}}


                    {{-- group start --}}
                    <div class="tab-pane fade" id="pills-group" role="tabpanel" aria-labelledby="pills-group-tab">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Group List</h4>
                                <p class="card-description"></p>
                            </div>
                            <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                                data-toggle="modal" data-target="#groupModal">Add Group
                            </button>
                        </div>
                        <div class="content-wrapper text-primary">
                            <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($groups as $group)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td> {{ $group->name }} </td>
                                            <td> Edit </td>
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
                    {{-- group end --}}

                </div>
            </div>
        </div>
    </div>










    {{-- shift modal start --}}
        <div class="modal fade" id="shiftModal" tabindex="-1" aria-labelledby="shiftModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="shiftModalLabel">Create New Session</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('shift.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sift:</label>
                                <input type="text" class="form-control" name="name" id="sessionTitle">
                                <input type="hidden" name="ins_class_id" value="{{$id}}">
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
    {{-- shift modal end --}}


    {{-- category modal start --}}
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Create New Session</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                             <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Shift</label>
                                <select class="form-control" name="shift_id">
                                    <option value="">select</option>
                                     @forelse ($shifts as $shift)
                                       <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Category:</label>
                                <input type="text" class="form-control" name="name" id="sessionTitle">
                                <input type="hidden" name="ins_class_id" value="{{$id}}">
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
    {{-- category modal end --}}

    {{-- section modal start --}}
     <div class="modal fade" id="sectionModal" tabindex="-1" aria-labelledby="sectionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Create New Session</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('section.store') }}" method="POST">
                            @csrf
                             <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Shift</label>
                                <select class="form-control" name="shift_id">
                                    <option value="">select</option>
                                     @forelse ($shifts as $shift)
                                       <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Section:</label>
                                <input type="text" class="form-control" name="name" id="sessionTitle">
                                <input type="hidden" name="ins_class_id" value="{{$id}}">
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
    {{-- section modal end --}}

    {{-- group modal start --}}
<div class="modal fade" id="groupModal" tabindex="-1" aria-labelledby="groupModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Create New Session</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('group.store') }}" method="POST">
                            @csrf
                             <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Shift</label>
                                <select class="form-control" name="shift_id">
                                    <option value="">select</option>
                                     @forelse ($shifts as $shift)
                                       <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Section:</label>
                                <select class="form-control" name="section_id">
                                    <option value="">select</option>
                                     @forelse ($sections as $section)
                                       <option value="{{$section->id}}">{{$section->name}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="ins_class_id" value="{{$id}}">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                               <input type="text" name="name" class="form-control">
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
    {{-- group modal end --}}
@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            $('#customTable').DataTable();
        });

        $(document).ready(function() {
            $('#customTable1').DataTable();
        });
        $(document).ready(function() {
            $('#customTable2').DataTable();
        });
        $(document).ready(function() {
            $('#customTable3').DataTable();
        });
    </script>
@endsection
