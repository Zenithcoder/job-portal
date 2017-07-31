
@extends('master')

@section('content')

<!DOCTYPE html>
<html lang="en">
   
 <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->

      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>Services</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/style.css">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
      <!-- =-=-=-=-=-=-= Magnific PopUP CSS =-=-=-=-=-=-= -->
      <link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="css/owl.style.css">
      <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic%7CMerriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="css/flaticon.css" rel="stylesheet">
      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="css/colors/defualt.css">
      
      <!-- Animation Css -->
      <link href="css/animate.min.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="css/select2.min.css" rel="stylesheet" />
      <!-- Menu Hover -->
      <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
    <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
       
      <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
        @include('header')
      </header>
      <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= -->
      <section class="breadcrumbs-area parallex">
         <div class="container">
            <div class="row">
               <div class="page-title">
                  <div class="col-sm-12 col-md-6 page-heading text-left">
                     <h3>Our expertise </h3>
                     <h2>Services Detail</h2>
                  </div>
                  <div class="col-sm-12 col-md-6 text-right">
                     <ul class="breadcrumbs">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">services</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Our Services =-=-=-=-=-=-= -->
      <section class="section-padding-70 services-2">
         <div class="container">
            <!-- Row -->
            <div class="row">
               <div class="col-md-9 col-sm-12 col-md-push-3 col-xs-12">
                  <div class="service-details">
                     <div id="post-slider" class="owl-carousel owl-theme margin-bottom-30">
                        <div class="item">
                           <a class="tt-lightbox" href="images/services/service-detail-2.jpg"><img class="img-responsive" src="images/services/service-detail-2.jpg" alt=""></a>
                        </div>
                        <div class="item">
                           <a class="tt-lightbox" href="images/services/service-detail-1.jpg"><img class="img-responsive" src="images/services/service-detail-1.jpg" alt=""></a>
                        </div>
                        <div class="item">
                           <a class="tt-lightbox" href="images/services/service-detail-3.jpg"><img class="img-responsive" src="images/services/service-detail-3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                           <a class="tt-lightbox" href="images/services/service-detail-4.jpg"><img class="img-responsive" src="images/services/service-detail-4.jpg" alt=""></a>
                        </div>
                     </div>
                     <div class="services-content">
                         <ul class="margin-top-30 margin-bottom-30 clearfix">
                           <li class="col-sm-6">
                              <a class="tt-lightbox" href="images/gty.png"><img alt="" src="images/gty.png" class="img-responsive"> </a>
                           </li>
                            
                        </ul>
                          <div class="service-tab margin-top-20">
                           <ul class="nav nav-pills">
                              <li class="active"><a data-toggle="pill" href="#tab1">Human Capital Development</a></li>
                              <li class=""><a data-toggle="pill" href="#tab2">Businsess Advisory</a></li>
                              <li class=""><a data-toggle="pill" href="#tab3">Marine Support</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="tab1" class="tab-pane fade active in">
                                  <h6>Our select services include:</h6>
                                 <ul>
                                    <li>Recruitment and Talent Acquisition</li>
                                    <li>Executive Search and Placement</li>
                                    <li>Personnel Management/Outsourcing</li>
                                    <li>Training and Capacity Development</li>
                                    <li>Employee Engagement surveys</li>
                                    <li>Performance Management Systems</li>
									<li>Community Engagement</li>
									<li>Local Content Compliance</li>
                                 </ul>
                              </div>
                              <!-- End of #tab1 -->
                              <div id="tab2" class="tab-pane fade">
                                 <h6>Our select services include:</h6>
                                 <ul>
                                    <li>Business Set up</li>
                                    <li>Documentation for registrations with regulatory bodies</li>
                                    <li>Business Process Re-engineering</li>
                                    <li>Business Plans & Business Proposal Development</li>
                                 </ul>
                              </div>
                              <!-- End of #tab2 -->
                              <div id="tab3" class="tab-pane fade">
                                  <h6>Our select services include:</h6>
                                 <ul>
                                    <li>Equipment Procurement</li>
                                    <li>Equipment Brokering</li>
                                    <li>Equipment Maintenance</li>
                                </ul>
                              </div>
                              <!-- End of #tab3 -->
                           </div>
                           <!-- End of .tab-content -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- right column -->
               <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                  <div class="side-bar-services">
                     <ul class="side-bar-list">
                        <li><a href="#" class="active">All Services</a></li>
                        <li><a href="#">Recruitment and Talent Acquisition</a></li>
                        <li><a href="#">Executive Search/Placement</a></li>
                        <li><a href="#">Business Set Up </a></li>
                        <li><a href="#">Registration</a></li>
                        <li><a href="#">Procurement</a></li>
                        <li><a href="#">Maitenance</a></li>
                     </ul>
                  </div>
                  <div class="sidebar-heading">
                     <div class="heading-widget">
                        <div class="title">
                           <h2>Our Case Study</h2>
                           <div class="our_brochures">
                              <a href="#" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>Mami Marine Ltd</a>
                              <a href="#" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-word-o" aria-hidden="true"></i></span>bet9Ja</a>
							  <a href="#" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-word-o" aria-hidden="true"></i></span>Imperial Homes</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
            <!-- Row End -->
         </div>
         <!-- end container -->
      </section>
      <!-- =-=-=-=-=-=-= Call To Action End =-=-=-=-=-=-= -->
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
      <script src="js/bootstrap-dropdownhover.min.js"></script><!-- Jquery Easing -->
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
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
       <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
   </body>

<!-- Mirrored from html.glixentech.com/go-finance/demos/go-finance/services-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 13:52:57 GMT -->
</html>

@endsection