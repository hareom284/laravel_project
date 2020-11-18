@extends('usertemplate')

@section('content')

<div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form>
                        <h2 class="form-title">Plase Signin</h2>
                            <div class="form-group row">
                              <label for="email" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                  <div class=" alert alert-danger">{{$message}}</div>
                                @enderror
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
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                              </div>
                            </div>
                    </form>
                    {{-- <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Please Login</h2>
                         <div class="form-group">
                          <label>Email</label>
                            <input type="email" class="form-input @error('email') is is-invalid @enderror" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" />
                            @error('email')
                              <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                       <div class="form-group">
                          <label>Password</label>
                            <input type="password" class="form-input @error('email') is is-invalid @enderror" name="password" id="password" placeholder="Password"  />
                            @error('password')
                              <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                        </div>
                    </form> --}}
                    
                </div>
            </div>
        </section>

    </div>

 
@endsection
@section('script')

 
  
</script>
  </script>

@endsection
