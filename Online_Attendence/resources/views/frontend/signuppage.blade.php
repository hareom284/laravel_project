@extends('usertemplate')

@section('content')

<div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form>
                    	<h2 class="form-title">Create account</h2>

                    	  <div class="form-group row">
						    <label for="photo" class="col-sm-2 col-form-label">Photo:</label>
						    <div class="col-sm-10">
						      <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" name="photo" >
						      @error('photo')
						      	<div class="alert alert-danger">{{$message}}</div>
						      @enderror
						    </div>
						  </div>
                    	  <div class="form-group row">
						    <label for="name" class="col-sm-2 col-form-label">Name</label>
						    <div class="col-sm-10">
						      <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" name="name" value="{{old('name')}}">
						      @error('name')
						      	<div class="alert alert-danger">{{$message}}</div>
						      @enderror
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="email" class="col-sm-2 col-form-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{old('email')}}">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="password" class="col-sm-2 col-form-label">Password</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
						      @error('password')
						      	<div class="alert alert-danger">{{$message}}</div>
						      @enderror
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="password" class="col-sm-2 col-form-label">Con_pass</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" id="password" name="password" placeholder="Confirm your password">
						    </div>
						  </div>
						  <fieldset class="form-group">
						    <div class="row">
						      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
						      <div class="col-sm-10">
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
						          <label class="form-check-label" for="male">
						            Male
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gender" id="female" value="female">
						          <label class="form-check-label" for="female">
						            Female
						          </label>
						        </div>
						      </div>
						    </div>
						  </fieldset>
						  <div class="form-group row">
						    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Your phone" >
						      @error('phone')
						      	<div class="alert alert-danger">{{$message}}</div>
						      @enderror
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="address" class="col-sm-2 col-form-label">Address</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address" name="address">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label class="col-sm-2 col-form-label">Course</label>
						    <div class="col-sm-10">
						      <select class="custom-select" name="course_name">
								  <option selected>Choose Course</option>
								  <option value="1">One</option>
								  <option value="2">Two</option>
								  <option value="3">Three</option>
							  </select>
						    </div>
						  </div>
						 
						  <div class="form-group row">
						    <div class="col-sm-10">
						      <button type="submit" class="btn btn-primary">Sign up</button>
						    </div>
						  </div>
						</form>
                    
                </div>
            </div>
        </section>

    </div>

 
@endsection
@section('script')

 
  
</script>
  </script>

@endsection
