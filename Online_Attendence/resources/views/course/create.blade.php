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
    <form  action="{{route('course.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
      @csrf  
      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="photos">Course Logo <span class="required">*</span>
            <div class="col-md-6 col-sm-6 ">
               <div class=" offset-md-3 offset-lg-4">
                 <div class="profile-pic">
                  <img alt="User Pic" id="img" src="https://previews.123rf.com/images/luka007/luka0071601/luka007160100985/50665073-add-book-icon.jpg" id="profile-image1" height="300">
                  <input type="file" name="photo" onchange="preview(event)" id="photos" class="hidden @error('photo') is-invalid @enderror">
                 </div>
                  
                  @error('photo')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
               </div>
               
            </div>
      </div>
            
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="text" id="name" required="required" class="form-control @error('name') is-invalid @enderror" name="name">
             @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
       </div>
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No_of_times (Period)<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="number"  name="no_of_times" required="required" class="form-control @error('no_of_times') is-invalid @enderror" minlength="0">
             @error('no_of_times')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
       </div>
       <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required ">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea class="form-control" id="description" name="description" class="@error('description') is-invalid @enderror"></textarea>
            @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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
