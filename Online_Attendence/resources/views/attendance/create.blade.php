

{{-- For Attendance Check --}}

@extends('attendancetemplate')

@section('content')

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Teacher Dashboard </h1>
      <p></p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h2 class="d-inline-block"> Student  List </h2>
            <ul class="list-group my-3 ">
                <li class="list-group-item d-flex justify-content-between align-items-center col-md-12 ">
                 <h4> Number Of Section :</h4>
                  <span class="badge badge-primary badge-pill"><h6>{{ Auth::user()->teacher->course->no_of_times }}</h6></span>
                  @if(isset(Auth::user()->email))
                  <h4> Course Name :</h4>
                  <span class="badge badge-primary badge-pill"><h6>{{Auth::user()->teacher->course->name}}</h6></span>
                  @else
                  <script> window.location ="/"</script>
                  @endif
                  

                  
               
            </ul>
            <form action="{{route('attendance.store')}}" method="POST">
              @csrf
            <table class="table mt-3 table-bordered dataTable">
              <thead>
                <tr>
                  <th>Student Name</th>
                  <th>Roll Number</th>
                  <th>Email</th>
                  <th>
                    
                    Attendance
                    
                  </th>
                </tr>
              </thead>
              <tbody>
              
                  @foreach($students as $student)
         
                <tr>
                  <td>{{$student->roll_no}}</td>
                  <td>{{$student->user->name}}</td>
                  <td>{{$student->user->email}}</td>
                  <td>
                    <input type="radio" name="{{ $student->id}}" id="defaultCheck1" class="myCheck oneBy" value="1" checked>Present
                    <input type="radio"  id="defaultCheck1" class="unCheck twoBy" name="{{ $student->id}}" value="0">Absent</td>
                  </td>

                </tr>
                 @endforeach
                
              </tbody>
            </table>
            
            <input class="btn btn-success col-md-4 offset-md-4" type="submit" value="Submit">
            </form>     
                
            
          </div>
        </div>
      </div>
  
</main>

    
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">
      $('.dataTable').DataTable();
  </script>
@endsection