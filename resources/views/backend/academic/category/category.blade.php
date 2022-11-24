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
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Classes List</h4>
                            <p class="card-description"> All Categories are displayed here </p>
                        </div>
                        <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                            data-toggle="modal" data-target="#exampleModal">Add
                            Category</button>
                    </div>
                    <div class="content-wrapper text-primary">
                        <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Categories </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $key => $cat)
                                    <tr>
                                        <td> {{ $key+1 }}</td>
                                        <td> {{ $cat->name }} </td>
                                        <td>
                                            @if($cat->status == 1)
                                            <span class="badge badge-warning">Active</span>
                                            @else
                                            <span class="badge badge-danger">InActive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="editClass({{$cat->id}})" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('category.destroy',$cat->id) }}" method="POST" class="d-inline">
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
                        <h5 class="modal-title" id="exampleModalLabel">Create New Class</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Category Name:</label>
                                <input type="text" class="form-control" name="name" id="sessionTitle">
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
                        <form action="{{ route('category.update',1) }}" method="POST">
                            @csrf
                            <input type="number" hidden name="category_id" id="cat_id">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Category Name:</label>
                                <input type="text" class="form-control" name="name" id="cat_name">
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
        function editClass(id){
            $.ajax({
                url        : '/academic/category/edit/'+id,
                type       : 'Get',
                success    : function(data){
                    $("#cat_id").val(data.id);
                    $("#cat_name").val(data.name);
                    $('#updateModal').modal('show');
                }
        });
        }
    </script>
@endsection

