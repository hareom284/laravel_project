<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Attendance</title>
  <link rel="stylesheet" href="{{asset('my_asset/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('my_asset/css/style.css')}}">
</head>
<body>
  <div class="bg-img">
    <nav class="navbar navbar-expand-lg navbar-light">
<<<<<<< HEAD
      <a href="" class="navbar-brand mx-5"><span style="color:#d50000; font-size:30px;">Double</span><span style="color:#AA00FF; font-size:30px;">Vision</span></a>
=======
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('my_asset/images/logo1.png') }}" width="70px" height="40px" alt="" loading="lazy" style="background: transparent;">
        </a>
      </nav>
>>>>>>> 8710c9e5e14a9f50aa5401af01055a6f673d393c
      <button class="navbar-toggler" data-target="#Nav" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Nav">
        <ul class="navbar-nav ml-auto mx-5">
          <!-- <li class="nav-item"><a href="" class="nav-link">Gallery</a></li> -->
          <li class="nav-item"><a href="" class="nav-link">About</a></li>

          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

<<<<<<< HEAD
         
=======
          
>>>>>>> 8710c9e5e14a9f50aa5401af01055a6f673d393c
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign</a></li>
          <li class="nav-item"><a href="{{ route('student.create') }}" class="nav-link">Sign Up</a></li>


        </ul>
      </div>
    </nav>
  </div>
  @yield('content') 
 
  @yield('script')

<script src="{{asset('my_asset/bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('my_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>