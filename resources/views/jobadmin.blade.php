<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>Job Application Page</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/et-line-fonts.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Magnific PopUP CSS =-=-=-=-=-=-= -->
    <link href="{{asset('js/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.style.css')}}">
    <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <!-- Theme Color -->
    <link rel="stylesheet" id="color" href="{{asset('css/colors/defualt.css')}}">
    <!-- For Style Switcher -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- Animation Css -->
    <link href="{{asset('css/animate.min.css')}}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <!-- Menu Hover -->
    <link href="{{asset('css/bootstrap-dropdownhover.min.css')}}" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
      
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
      @include('header')
      <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= 
    <section class="breadcrumbs-area parallex">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <div class="col-sm-12 col-md-6 page-heading text-left">
                        <h3>Job Application </h3>
                        
                    </div>
                     
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Error Page =-=-=-=-=-=-= -->
    <section id="error-page" class="section-padding-70">
        <div class="container">
 
            <!-- Row -->
            <div class="row">
             
                <div style ="font-family: calibri;"  class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">

<div>
<p style ="color:#0087ff;">{{$jobadmins->role}}</p><hr>
<p><b>Sector</b>: {{$jobadmins->sector}}</p>
<p><b>Deadline</b>: {{$jobadmins->deadline}}</p>

<p style ="color:#0087ff;">OUR COMPANY:</p>
<hr>
<p>{{$jobadmins->company}} </p>
<p style ="color:#0087ff;">RESPONSIBILITIES:</p>
<hr>
<p>  {!! nl2br(e($jobadmins->resp)) !!}</p> <br>
<p style ="color:#0087ff;">QUALIFICATION AND EXPERIENCE:</p><hr>
<p> {!! nl2br(e($jobadmins->qual)) !!}</p> <br>
 
<p style ="color:#0087ff;">SKILL:</p><hr>
   Ideal candidate should be able to:<br>
<p> {!! nl2br(e($jobadmins->skill)) !!}</p>

</div>

                 
<div>
<a href="{{route('job3')}}" class="btn btn-warning btn-sm">APPLY!</a>
<div style="color:red;">To  apply, send your resume with subject {{$jobadmins->role}} to recruitment@mml.com.ng by {{$jobadmins->deadline}}</div>   
</div>
                </div>
            
                
            </div>			 
        </div>
       
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Team End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-area">
          @include('footer')
      </footer>

	<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
	
	<!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
	
    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core Css  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Dropdown Hover  -->
     <script src="js/bootstrap-dropdownhover.min.js"></script>
    <!-- Jquery Easing -->
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- Jquery Counter -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Jquery Waypoints -->
    <script src="js/jquery.waypoints.js"></script>
    <!-- Jquery Appear Plugin -->
    <script src="js/jquery.appear.min.js"></script>
    <!-- Jquery Shuffle Portfolio -->
    <script src="js/jquery.shuffle.min.js"></script>
    <!-- Carousel Slider  -->
    <script src="js/carousel.min.js"></script>
    <!-- Jquery Migrate -->
    <script src="js/jquery-migrate.min.js"></script>
    <!--Style Switcher -->
    <script src="js/color-switcher.js"></script>
    <!-- Gallery Magnify  -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Sticky Bar  -->
    <script src="js/theia-sticky-sidebar.js"></script>
    <!-- Jquery Select Options  -->
    <script src="js/select2.min.js"></script>
    <!-- Template Core JS -->
    <script src="js/custom.js"></script>
  

				 
				
     
    <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
</body>


<!-- Mirrored from html.glixentech.com/go-finance/demos/go-finance/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 13:53:49 GMT -->
</html>