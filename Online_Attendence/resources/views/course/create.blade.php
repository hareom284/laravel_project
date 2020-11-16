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
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="photos">Phone <span class="required">*</span>
            <div class="col-md-6 col-sm-6 ">
               <div class="profile-pic offset-md-3 offset-lg-4">
                 
                  <img alt="User Pic" id="img" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" id="profile-image1" height="300">
                  <input type="file" name="image" onchange="preview(event)" id="photos" class="hidden">
                  
                  
               </div>
               
            </div>
       </div>
            
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="text" id="name" required="required" class="form-control" name="name">
          </div>
       </div>
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No_of_times (Period)<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="number"  name="no_of_times" required="required" class="form-control" minlength="0">
          </div>
       </div>
       <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea class="form-control" id="description"></textarea>
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
