 


 {{-- For Attendance Check --}}



@extends('attendance')


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
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Studen Name</th>
      <th scope="col">Roll Number</th>
      <th scope="col">Course</th>
      <th scope="col">Attendance Status</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>
  
</main>

@endsection