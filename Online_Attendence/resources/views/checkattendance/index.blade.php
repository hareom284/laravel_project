

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
                  
                    <select name="subject" class="badge badge-primary badge-pill" style="outline: none">
                      @foreach ($courses as $course)
                          
                      
                      <option value="{{ $course->course_id }}">{{$course->name}}</option>

                      @endforeach
                    </select>

                  
               
            </ul>
            
            <table class="table mt-3 table-bordered dataTable">
              <thead>
                <tr>
                  <th>Student Name</th>
                  <th>Roll Number</th>
                  <th>Course</th>
                  <th>
                    <button type="button" class="check btn btn-success">Select All</button>
                    Attendance
                    
                  </th>
                </tr>
              </thead>
              <tbody>
           
                  @foreach($students as $student)
         
                <tr>
                  <td>{{$student->roll_no}}</td>
                  <td>{{$student->user->name}}</td>
                  <td>{{$student->course->name}}</td>
                  <td>
                    <input type="radio" value="" id="defaultCheck1" class="myCheck" name="{{ $student->id }}">Present
                    <input type="radio" value="" id="defaultCheck1" class="unCheck" name="{{ $student->id }}">Absent</td>
                  </td>

                </tr>
                 @endforeach
                
              </tbody>
            </table>
            <button class="btn btn-success col-md-4 offset-md-4">Complete All</button>
          
            
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
  $(document).ready(function(){
      $(".check").click(function(){
          $(".myCheck").prop("checked", true);
      });
      $(".uncheck").click(function(){
          $(".unCheck").prop("checked", true);
      });
  });
  </script>
  <script type="text/javascript">
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        }); 
    $(document).ready(function(){
      
      var pcount=0;
     $(".oneBy,.twoBy").click(function(){
  
         pcount++;
          var studentid =$(this).data('studentid');
          var courseid =$(this).data('courseid');
          var tvalue = $(this).data('tvalue');

          $.post("{{route('attendance.store')}}",{studentid:studentid,courseid:courseid,tvalue:tvalue},function(response){
            console.log(response);
          })
        
        var rowNumber = $("#myTable tr").length;
        // console.log(rowNumber);
        if (pcount == (rowNumber-1)) {
            $('.com_all').prop('disabled',false);
        }

       
         
     })

     

    })
    
  </script>
 

@endsection