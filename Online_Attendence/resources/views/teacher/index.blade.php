@extends('admin')

@section('content')

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <p>A free and open source Bootstrap 4 admin template</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <button class="btn btn-primary" type="button">
      <a href="{{ route('teacher.create') }}" style="color:white; text-decoration:none;">
      <ion-icon name="add-outline" style="font-size:20px;"></ion-icon>Add Teacher
      </a>
    </button>
  </div>
    <div class="row">
      <div class="col-md-12">
          <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered" id="sampleTable">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Phone</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                             <tr>
                               @php
                                 
                                 $i = 0;

                               @endphp
                               @foreach ($teacher as $teache)
                               {{-- $name = Teacher::find($teacher->user_id)))->name;   --}}
                               
                               <td>{{ ++$i }}</td>
                               <td>{{ $teache->user->name }}</td>
                               <td>{{ $teache->user->email }}</td>
                               <td>{{ $teache->course->name }}</td>
                               <td>{{ $teache->phone_no }}</td>
                               <td>

                                <a href="#" class="btn btn-success">
                                 <ion-icon name="reader-outline"></ion-icon>Details
                                </a>
                                <a href="#" class="btn btn-success">
                                 <i class="icofont-edit"></i>Edit
                                </a>
                                
 
                                <a href="#" class="btn btn-danger">
                                 <i class="icofont-delete"></i>Delete
                                </a>
                                </td>
                              </tr>
                                @endforeach
                            
                          </tbody>
                      </table>
                    </div>
                </div>
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
@endsection