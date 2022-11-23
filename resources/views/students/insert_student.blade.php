@extends('admin.layouts.app')

@section('content')
      <div class="main-panel">
       
          <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-1 mb-2 nested-menu shadow-sm rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item px-1">
                            <a class="nav-link" href="{{ route('admission.index') }}">
                                Student Admission List
                            </a>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link" href="{{ route('admission.categories') }}" >
                                Student Categories List
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" >
                                Student Migration List
                            </a>
                        </li>
                    </ul>
                </div>         
            </div>
        </nav>
          <div >
            <div class="card new-table mb-3">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('admission.get_number_of.table_student')}}" method="post">
                    @csrf
                    <div>
                        <div class="row">
                          <div class="col">  <label> Academic Year</label>
                            <select name="academic_year" class="form-control " >
                                <option value="">select</option>
                                @foreach($academic_years as $academic_year)
                                <option value="{{$academic_year->id}}">{{$academic_year->title}}</option>
                                @endforeach
                            </select></div>
                          <div class="col"> <label >Class</label>
                            <select name="classes" class="form-control">
                                <option value="" disabled>select</option>
                                @foreach($classes as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select></div>
                     
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <label for="">Number Of Row</label>
                                <input type="number"  class="form-control " name="table_number" required></div>
                         
                        </div>
                      </div>

                    <button type="submit" class="btn btn-primary mt-3 float-end">Proccess</button>
                    </form>
                  </div>
                </div>
            </div>

             <div class="card new-table">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admission.store')}}" method="post">
                             @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Select</th>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gander</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Father's Name</th>
                                    <th scope="col">Mother's Name</th>
                                    <th scope="col">Mobile No</th>
                                </tr>
                            </thead>


                            <tbody>
                                @for($i=0;$i<$table_number;$i++)
                                <tr>
                                    <th><input type="checkbox" name="check[]" class=""></th>
                                    <th><input type="text" class="form-control" name="roll_no[]" placeholder="Roll Number"></th>
                                    <td><input type="text" class="form-control" name="name[]" placeholder="Name"></td>
                                    <input type="hidden" class="form-control" name="academic_year[]" value="{{ $year }}" placeholder="academic_year">
                                   <input type="hidden" class="form-control" name="academic_class[]" value="{{ $academic_class }}" placeholder="academic_year">
                                    <td> <select name="gender[]" class="form-control" >
                                            <option value="" selected disabled>select a gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </td>

                                    <td> <select name="religion[]" class="form-control" >
                                        <option value="" selected disabled>select a religion</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Christian">Christian</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="father_name[]" placeholder="Father Name"></td>
                                <td><input type="text" class="form-control" name="mother_name[]" placeholder="Mother Name"></td>
                                <td><input type="text" class="form-control" name="mobile_number[]" placeholder="Mobile Number" ></td>
                                </tr>
                                @endfor

                            </tbody>


                        </table>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
             </div>


          </div>
        </div>
     
@endsection

@section('javascript')
     <script>

$('input[type="checkbox"]').change(function(){
  var checked = $(this).is(':checked');
  var input = $(this).closest('tr').find('input[type="text"]');
  var select = $(this).closest('tr').find('select,input');
  input.prop('required', checked)
  select.prop('required', checked)
})
</script>
@stop

