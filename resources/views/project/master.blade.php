<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('project/img/logohome.png')}}">

  <!-- Material Design for Bootstrap fonts and icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

  <!-- fonts-->
  <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('project/css/bootstrap.min.css')}}">

  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('project/css/mdb.min.css')}}">

  <!-- main css-->
  {{-- <link href="project/css/style.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('project/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('project/css/main.css')}}">

  <link rel="stylesheet" href="{{ asset('project/css/style_step.css')}}">


  <title>@yield('title')</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar wow fadeIn Slow" id="mainNav">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="home">
        <img src="{{asset('project/img/logohome.png')}}" id="logo" >
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item @yield('nav-home')">
            <a class="nav-link text-uppercase text-expanded" href="home">หน้าแรก</a>
            <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item @yield('nav-about')">
            <a class="nav-link text-uppercase 0text-expanded" href="about">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item @yield('nav-service')">
            <a class="nav-link text-uppercase 0text-expanded" href="service">บริการของเรา</a>
          </li>
          <li class="nav-item @yield('nav-team')">
            <a class="nav-link text-uppercase 0text-expanded" href="team">ทีมของเรา</a>
          </li>
          <li class="nav-item @yield('contact')">
            <a class="nav-link text-uppercase 0text-expanded" href="contact">ติดต่อเรา</a>
          </li>
        </ul>

        <!-- Right-->
        @if(Auth::user())
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item" style="padding-top: 5px;">
            <a href="{{ url('booking/')}}" class="nav-link border border-light rounded mr-1" id="booking">
              จองบริการ
            </a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(!empty(Auth::user()->ac_image))
                        <img src="{{asset('/project/backend/img/User/small/'.Auth::user()->ac_image)}}" class="rounded-circle" width="40">
                    @endif</a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated">
                    <a class="dropdown-item" href="{{url('/booking/details/')}}"><i class="ti-user m-r-5 m-l-5"></i>My Booking</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{URL::to('/showprofile')}}"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{URL::to('/logout')}}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                </div>
            </li>
            <span class="Color" style=" margin-top: 13px; margin-left: 7px; ">{{ Auth::user()->ac_fname }} {{ Auth::user()->ac_lname }}</span>
        </ul>

        @else
        <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
            <a href="{{URL::to('/login_page')}}" class="nav-link border border-light rounded" id="booking">
              เข้าสู่ระบบ
            </a>
          </li>
        </ul>
        @endif
    </div>

    </div>
  </nav>
  <!-- Navbar -->
  @yield('content')

  <!--Footer-->
  <footer class="page-footer font-small wow fadeIn Slower moblie-center">
    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-4 py-3 Center">
        <a class="navbar-brand" href="home">
          <img src="{{asset('project/img/logohome.png')}}" id="logoFooter" >
        </a>
      </div>

        <!--บริการ-->
      <div class="col-sm-12 col-md-4 col-lg-4 py-1">
        <div class="list-group">
          <li class="list-group-item disabled FontSize Color">บริการของเรา</li>
          <a href="service" class="list-group-item list-group-item-action">ทรีทเมนต์</a>
          <a href="service" class="list-group-item list-group-item-action">แพ็คเกจ</a>
        </div>
      </div>
        <!--End บริการ-->

      <!-- Contact Us -->
      <div class="col-sm-12 col-md-4 col-lg-4 py-3">
        <div class="FontSize Color">
          <b>ติดต่อเรา</b>
        </div>
        <a href="https://www.facebook.com/HzgBossKung" target="_blank">
        <i class="fa fa-facebook mr-3 mt-3"></i>
      </a>
        <a href="https://www.instagram.com/muffinsruchadapong/?hl=th" target="_blank">
        <i class="fa fa-instagram mr-3 mt-3"></i>
      </a>
      <a href="https://www.google.com/gmail/" target="_blank">
      <i class="fa fa-envelope mr-3 mt-3"></i>
    </a> <br>
    <span class="pt-3">โทร. 091-808-4163 </span>

      </div>
      <!-- End Contact Us -->
    </div>
    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      © 2018 Copyright:
      <a href="#"> HealthLandMassage&Spa.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script type="text/javascript" src="{{asset('project/js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->

  <script type="text/javascript" src="{{asset('project/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->

  <script type="text/javascript" src="{{asset('project/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->

  <script type="text/javascript" src="{{asset('project/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    $(document).ready(function(){

    });
  </script>
  <script type="text/javascript" src="{{asset('project/js/scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('project/js/retina-1.1.0.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('project/js/retina-1.1.0.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('project/js/jquery.backstretch.min.js')}}"></script>
  <script src="{{ asset('project/backend/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
  <script src="{{ asset('project/backend/dist/js/pages/mask/mask.init.js')}}"></script>



</body>

</html>
