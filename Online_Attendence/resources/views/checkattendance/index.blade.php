

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
                  <span class="badge badge-primary badge-pill"><h6>14</h6></span>
                  <h4> Course Name :</h4>
                  <span class="badge badge-primary badge-pill"><h6>Software Engineering</h6></span>
               
            </ul>
      
      <table class="table mt-3 table-bordered dataTable" id="myTable">
        <thead>
          <tr>
            
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Attendance Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($students as $student)
         
         
          <tr>
            
            
            <td>{{$student->roll_no}}</td>
            <td>{{$student->user->name}}</td>
            <td>{{$student->course->name}}</td>
            <td></td>
            <td>
            <a href="#" class="btn btn-success" id="oneBy" disabled>Present</a>
            <a href="#" class="btn btn-danger" id="twoBy" disabled>Present</a>
             
            
            {{-- <form method="post" action="" class="d-inline-block" onsubmit="return confirm('Are you Sure?')" id="oneBy">
              
              @method('DELETE')
              <input type="submit" name="btnsubmit" value="Absent" class="btn btn-danger">
            </form> --}}
            <a href="#" class="btn btn-info">Detail</a>
            </td> 
          </tr>
          @endforeach
        
       
          
        </tbody>

      </table>
            <button class="btn btn-success col-md-4 offset-md-4 com_all" disabled="true">Compelte All</button>
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
  <script type="text/javascript">
    $(document).ready(function(){
      
      var pcount=0;
     $("#oneBy,#twoBy").click(function(){
        swal("Are you sure you want to do this?", {
        buttons: ["Oh noez!", "Aww yiss!"],
      });

         pcount++;
        
        console.log(pcount);
        var rowNumber = $("#myTable tr").length;
        console.log(rowNumber);
        if (pcount == (rowNumber-1)) {
            $('.com_all').prop('disabled',false);
        }

         // console.log(pcount);
     })
     // function countRow(){
      
     // }


     // console.log(pcount);
     // console.log(rowNumber);
      

    })
    
  </script>
 

@endsection