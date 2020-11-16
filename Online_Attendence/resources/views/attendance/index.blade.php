

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
                  <span class="badge badge-primary badge-pill"><h6>14</h6></span>
                  <h4> Course Name :</h4>
                  <span class="badge badge-primary badge-pill"><h6>Software Engineering</h6></span>
               
            </ul>
      
      <table class="table mt-3 table-bordered dataTable">
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Roll Number</th>
            <th>Course</th>
            <th>Attendance Percent</th>
            <th>Report</th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            
            <td>Kyaw Zin Win</td>
            <td>1</td>
            <td>Software Engineeringr</td>
            <td>80%</td>
            <td>
             <a href="#" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-info">Show</a>
            <form method="post" action="" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
              
              @method('DELETE')
              <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
            </form>
            </td> 
          </tr>
       
          
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