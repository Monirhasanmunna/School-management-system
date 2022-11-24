@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        @include('backend.academic.nav')
        <div>
            <div class="card new-table">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <span>{{ $message }}</span>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Section List</h4>
                            <p class="card-description"> All Sections are displayed here </p>
                        </div>
                        <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                            data-toggle="modal" data-target="#exampleModal">Add
                            Section</button>
                    </div>
                    <div class="content-wrapper text-primary">
                        <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sections </th>
                                    <th> Class </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sections as $key => $section)
                                    <tr>
                                        <td> {{ $key+1 }}</td>
                                        <td> {{ $section->name }} </td>
                                        <td>
                                            {{$section->class->name}}
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="editSection({{$section->id}})" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('section.destroy',$section->id) }}" method="POST" class="d-inline">
                                                @csrf
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
                        <h5 class="modal-title" id="exampleModalLabel">Create New Section</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('section.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Class</label>
                                <select name="class_id" class="form-control @error('class') is-invalid @enderror">
                                    <option selected hidden>--Select One--</option>
                                    @foreach ($classes as $class)
                                      <option value="{{$class->id}}">{{$class->name}}</option> 
                                    @endforeach
                                </select>
                                @error('class')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Section Name:</label>
                                <input type="text" class="form-control @error('section name') is-invalid @enderror"" name="name" id="sessionTitle">
                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
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


        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('section.update',1) }}" method="POST">
                            @csrf
                            <input type="number" hidden name="section_id" id="sec_id">

                            <div class="form-group">
                                <label>Class</label>
                                <select name="class_id" id="class" class="form-control @error('class') is-invalid @enderror">
                                    @foreach ($classes as $class)
                                      <option value="{{$class->id}}">{{$class->name}}</option> 
                                    @endforeach
                                </select>
                                @error('class_id')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Section Name:</label>
                                <input type="text" class="form-control" name="name" id="sec_name">
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

    <script>
        function editSection(id){
            $.ajax({
                url        : '/academic/section/edit/'+id,
                type       : 'Get',
                success    : function(data){
                    $("#sec_id").val(data.id);
                    $("#class").append(`<option hidden selected value="${data.class.id}">${data.class.name}</option>`);
                    $("#sec_name").val(data.name);
                    $('#updateModal').modal('show');
                }
        });
        }
    </script>
@endsection

