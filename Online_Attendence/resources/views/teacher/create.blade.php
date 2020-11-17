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
<div class="x_content">
    <br />
    <form  action="{{ route('teacher.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
      @csrf
      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="photos">Profile <span class="required">*</span>
            <div class="col-md-6 col-sm-6 ">
               <div class="profile-pic offset-md-3 offset-lg-4">
                 <img alt="User Pic" id="img" name="photo" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" id="profile-image1" height="300" value="{{ old('photo') }}">
                  <input type="file" name="photo" onchange="preview(event)" id="photos" class="hidden">  
               </div>
               
            </div>
      </div>
            
      <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="text" id="name" required="required" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}">
             @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
      </div>
      <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="email" id="last-name" name="email" required="required" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
             @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
      </div>
      <div class="item form-group">
          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
          <div class="col-md-6 col-sm-6 ">
             <input id="middle-name" class="form-control @error('password') is-invalid @enderror " type="password" name="password">
             @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
      </div>
      <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
          <div class="col-md-6 col-sm-6 ">
             <div id="gender" class="btn-group" data-toggle="buttons">
                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="female" class="join-btn"> Female
                </label>
             </div>
          </div>
      </div>
      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone_no">Phone no<span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
           <input id="phone_no" name="phone_no" class="form-control @error('phone_no') is-invalid @enderror" type="text" required="required" type="text" value="{{ old('degree') }}">
           @error('phone_no')
           <div class="alert alert-danger">{{ $message }}</div>
           @enderror
         </div>
     </div>
      <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="degree">Degree<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input id="degree" name="degree" class="form-control @error('degree') is-invalid @enderror" type="text" required="required" type="text" value="{{ old('degree') }}">
            @error('degree')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
      </div>
      <div class="form-group">
        <label class="ol-form-label col-md-3 col-sm-3 label-align ">Select Multiple</label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control" name="course">
               <optgroup label="Choose Course">
               @foreach ($course as $subject)
               <option value="{{$subject->id}}">{{ $subject->name }}</option>
               @endforeach
            </select>
         </div>
      </div>
       <div class="ln_solid"></div>
      <div class="item form-group">
         <div class="col-md-6 col-sm-6 ">
            
            
            <button type="submit" class="btn btn-success btn-block">Submit</button>
         </div>
      </div>
    </form>
 </div>
</main>
@endsection
@section('script')
<script>
function preview(event) {
   
   var image = event.target.files[0];
   var reader = new FileReader();
   reader.onload = function()
   {
      var result = reader.result;
      var img = document.getElementById('img');
      img.src = result;
   }
   reader.readAsDataURL(image);


}
  
</script>
    
@endsection
