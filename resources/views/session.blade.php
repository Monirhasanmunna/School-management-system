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

                        {{-- <li class="nav-item ">
                            <a class="nav-link" href="{{ route('classes.index') }}" id="nav-hov">
                                Class
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Admit Card
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Seat Plan
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                ID Card
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Testimonial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Transfer Certificate
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Tag for Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
                                Number Sheet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('unc_message')}}" id="nav-hov">
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Sessions List</h4>
                            <p class="card-description"> Session wise assigned Classes </p>
                        </div>
                        <button type="button" class="btn btn-primary mr-2" style="width: 125px;height: 34px;"
                            data-toggle="modal" data-target="#exampleModal">Add
                            Session
                        </button>
                    </div>
                    <div class="content-wrapper text-primary">
                        <table id="customTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Session </th>
                                    <th> Assign Classes </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sessions as $key=>$session)
                                    <tr>
                                        <td> {{ $key+1 }}</td>
                                        <td> {{ $session->title }} </td>
                                        <td>
                                            SIX, SEVEN, EIGHT
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" onclick="editsession({{$session->id}})" href="javascript:void(0)">Edit</a>
                                            <form id="deleteForm" action="{{Route('session.destroy',$session->id)}}" method="Post" style="display: none">
                                                @csrf

                                            </form>
                                            <a class="btn btn-sm btn-danger" onclick="deleteBtn()" href="javascript::void(0)">Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Create New Session</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('session.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Session:</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="sessionTitle">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
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


        @if(isset($session))
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Session</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('session.update',1)}}" method="POST">
                            @csrf
                            <input name="session_id" type="number" id="session_id" hidden>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Session:</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="titles" name="title" id="sessionTitle">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endif
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $('#customTable').DataTable();
        });
    </script>

    <script>
        function editsession(id){
            $.ajax({
                url         : '/academic/session/edit/'+id,
                type        : 'GET',
                success     : function(data){
                    console.log(data);
                    $("#session_id").val(data.id);
                    $("#titles").val(data.title);
                    $("#updateModal").modal('show');
                }
            });
        }
    </script>

    <script>
        function deleteBtn(){
            let text = "Are you sure?\nYou want to delete this data?.";
            if (confirm(text) == true) {
              $("#deleteForm").submit();
            }
        }
    </script>
@endsection
