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
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="photos">Profile <span class="required">*</span>
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
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="email" id="last-name" name="email" required="required" class="form-control">
          </div>
      </div>
      <div class="item form-group">
          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
          <div class="col-md-6 col-sm-6 ">
             <input id="middle-name" class="form-control" type="password" name="password">
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
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="degree">Degree<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input id="degree" class="form-control" type="text" required="required" type="text">
             
          </div>
      </div>
      <div class="form-group">
        <label class="ol-form-label col-md-3 col-sm-3 label-align ">Select Multiple</label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control">
               <option>Choose option</option>
               <option>Option one</option>
               <option>Option two</option>
               <option>Option three</option>
               <option>Option four</option>
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
