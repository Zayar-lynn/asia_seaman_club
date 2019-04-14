<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>ASC</title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="{{asset('img/seaman_logo.png')}}">

<!-- Bootstrap -->
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{url('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{url('css/style.css')}}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">

<link rel="stylesheet" href="../fancybox-master/dist/jquery.fancybox.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--header start-->
<div class="header-wrap">
  <div class="container"> 
    <!--row start-->
    <div class="row"> 
      <!--col-md-3 start-->
      <div class="col-md-2 col-sm-3">
        <div class="logo hidden-xs hidden-sm"><a href="index.php"><img src="{{asset('img/seaman_logo.png')}}" alt="" class="img-responsive"></a></div>


        <div class="logo hidden-md hidden-lg"><a href="index.php"><img src="{{asset('img/logo_2.png')}}" alt="" class="img-responsive"></a></div>


        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!--col-md-3 end--> 
      <!--col-md-7 end-->
      <div class="col-md-8 col-sm-9"> 
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header"> </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li> <a href="{{url('/')}}"> Home</a> </li>
                <li class="dropdown"> <a href="#"> Club Service <i class="caret"></i></a>
                  <ul class="dropdown-menu">
                    <li> <a href="{{url('/job-listing')}}"> JOBS </a></li>
                    <li> <a href="{{url('/company')}}"> COMPANY </a></li>
                    <li> <a href="{{url('/training')}}"> MARITIME TRAINING / CLASS </a></li>
                    <li> <a href="{{url('/e-learning')}}"> ONLINE LEARNING / CLASS </a></li>
                    <li> <a href="{{url('/freeagent')}}"> FREE AGENT </a></li>
                  </ul>
                    <!-- <li> <a href="job-details.php"> Job Details </a></li> -->
                    <!-- <li> <a href="candidates-listing.php"> Jobseeker Listing </a></li> -->
                    <!-- <li> <a href="candidates-details.php"> Jobseeker Details </a></li> -->
                    <!-- <li> <a href="login.php"> Login </a></li>
                    <li> <a href="register.php"> Register </a></li>
                    <li> <a href="post-job.php"> Job Post </a></li>
                    <li> <a href="pricing.php"> Packages </a></li>
                    <li> <a href="testimonials.php"> Testimonials </a></li> -->
                  <!-- </ul> -->
                </li>
                
                  <!-- <ul class="dropdown-menu">
                    <li> <a href="blog-grid.php"> Blog Grid sidebar</a></li>
                    <li> <a href="blog.php"> Blog List sidebar</a></li>
                    <li> <a href="blog-grid-full-width.php"> Blog full width </a></li>
                    <li> <a href="blog-details.php"> Blog Details with sidebar </a></li>
                    <li> <a href="blog-details-full-width.php"> Blog Details </a></li>
                  </ul> -->
                </li>

                <li class="dropdown"> <a href="about-us.php"> Club Business <i class="caret"></i></a>
                  <ul class="dropdown-menu">
                    <li> <a href="{{url('/blog-grid')}}"> Water treadment</a></li>
                    <li> <a href="{{url('/blog-grid')}}"> Air solutions</a></li>
                    <li> <a href="{{url('/blog-grid')}}"> Soil stabilization </a></li>
                  </ul>
                </li>
                <li> <a href="{{url('/blog-grid')}}"> News </a>
                <li> <a href="{{url('/about-us')}}"> About </a></li>
                <li> <a href="{{url('/contact-us')}}"> Contact us </a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start--> 
      </div>
      <!--col-md-3 end--> 
      <!--col-md-2 start-->
      <div class="col-md-2 col-sm-12">
        <div class="header-right">
          <!-- <div class="btn btn-danger"><a href="#">Chit Min Thu</a></div> -->
          <div class="user-wrap">
          @if(Auth::check())
          <div class="login-btn"><a href="{{url('logout')}}">Logout</a></div>
          @else
            <div class="login-btn"><a href="{{url('login')}}">Login</a></div>
            <div class="register-btn"><a href="{{url('register')}}">Register</a></div>
          @endif
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!--col-md-2 end--> 
    </div>
    <!--row end--> 
  </div>
</div>
<!--header start end--> 
