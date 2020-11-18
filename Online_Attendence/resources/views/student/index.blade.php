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
                                <th>Roll no</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                               $i = 0;   
                              @endphp
                              @foreach ($students as $item)
                                  
                              
                             <tr>
                                
                               <td>{{ ++$i }}</td>
                               <td>{{ $item->user->name }}</td>
                               <td>{{ $item->user->email }}</td>
                               <td>{{ $item->course->name }}</td>
                               <td>{{ $item->roll_no }}</td>
                               <td>

                                <a href="#" class="btn btn-success">
                                 <ion-icon name="reader-outline"></ion-icon>Details
                                </a>
                                <a href="#" class="btn btn-success disabled">
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
