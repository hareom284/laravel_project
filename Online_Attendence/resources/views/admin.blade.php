<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Student Attendance System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- fav icon font  --}}
    <!-- Favicon-->
    
    {{-- end favicon font  --}}
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- bootstrap  --}}
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.css')}}">
    {{-- icon font  --}}
    <link rel="stylesheet" type="text/css" href="{{('backend/icon/icofont/icofont.min.css')}}">
        <!-- Boxicon CSS -->')}}
    <link rel="stylesheet" type="text/css" href="{{('backend/icon/boxicons-master/css/boxicons.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 0 new notifications.</li>
            
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://zawzawwin.me/profile.jpg" alt="User Image" width="70px" height="40px" style="border-radius:49%;">
        <div>
          <p class="app-sidebar__user-name"> {{ Auth::user()->name }}</p>
          <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>>
    
      <ul class="app-menu">
                
        <li>
            <a class="app-menu__item" href="#">
                <i class="app-menu__icon icofont-dashboard"></i>
                <span class="app-menu__label">
                    Dashboard
                </span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="{{ route('teacher.index') }}">
              <i class="icofont-teacher"></i>
            
              <span class="app-menu__label">
                    Teacher
                </span>
            </a>
        </li>

        
        <li>
          <a class="app-menu__item" href="{{ route('course.index') }}">
            <i class="icofont-book-alt"></i>
              <span class="app-menu__label">
                  Course
              </span>
          </a>
      </li>
      <li>
        <a class="app-menu__item" href="{{ route('student.index') }}">
            <i class="app-menu__icon icofont-users-social"></i>
            <span class="app-menu__label">
                Student
            </span>
        </a>
    </li>

       
    
        
    </ul>
    </aside>

    @yield('content')

    <script src="{{asset('backend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('backend/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('backend/js/plugins/pace.min.js')}}"></script>
    <!-- Page specific d-->
    {{-- data table search plugin  --}}
    <script type="text/javascript" src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    @yield('script')
  </body>
</html>