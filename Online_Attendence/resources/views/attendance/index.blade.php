

{{-- For Attendance View --}}



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
      
      <table class="table mt-3 table-bordered dataTable">
        <thead>
          <tr>
            
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Attendance Status</th>
            <th>Report</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($students as $student)
         @php
             $count = $student->attendance->count;
             $no = Auth::user()->teacher->course->no_of_times ;
             $percentage = ceil(($count/$no)*100);
             
         @endphp
          
         
          <tr>
            
            <td>{{$student->roll_no}}</td>
            <td>{{$student->user->name}}</td>
            <td>{{$student->user->email}}</td>
            <td>{{ $percentage }} %</td>
            <td>
            <a href="#" class="btn btn-info">Detail</a>
            
            </td> 
          </tr>
          @endforeach
          
       
          
        </tbody>
      </table>
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