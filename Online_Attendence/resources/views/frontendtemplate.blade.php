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
      <a href="" class="navbar-brand mx-5">Student Attendance</a>
      <button class="navbar-toggler" data-target="#Nav" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Nav">
        <ul class="navbar-nav ml-auto mx-5">
          <li class="nav-item"><a href="" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="" class="nav-link">About</a></li>
          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign</a></li>
          <li class="nav-item"><a href="{{ route('student.create') }}" class="nav-link">Sign Up</a></li>

        </ul>
      </div>
    </nav>
  </div>
  @yield('content') 
  @yield('script')
</body>
<script src="{{asset('my_asset/bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('my_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</html>