@extends('admin')

@section('content')

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Course</h1>
      
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <button class="btn btn-primary" type="button">
      <a href="{{ route('course.create') }}" style="color:white; text-decoration:none;">
      <ion-icon name="add-outline" style="font-size:20px;"></ion-icon>Add Course
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
                                <th>Logo</th>
                                <th>Name</th>

                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @php 
                             $i=1;
                             @endphp
                             @foreach ($course as $subject)
                                 
                             
                             <tr>
                               <td>{{ $i++ }}</td>
                               <td>
                                <img src="{{ $subject->photo }}" width="90px" height="70px">
                              </td>
                               <td>{{$subject->name }}</td>
                               <td>

                               <a href="#" class="btn btn-success">
                                <ion-icon name="reader-outline"></ion-icon>Details
                               </a>
                               <a href="#" class="btn btn-success">
                                <i class="icofont-edit"></i>Edit
                               </a>
                               

                               <form action="{{ route('course.destroy',$subject->id) }}" method="POST" onsubmit="return confirm('❌❌Are you sure to Delete?❌❌')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                <i class="icofont-delete"></i>Delete
                                </button>
                               </form>
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
