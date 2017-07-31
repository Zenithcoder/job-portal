
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
      <title>About Us</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
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
      <link href="{{asset('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic%7CMerriweather:400,300,300italic,400italic,700,700italic')}}" rel="stylesheet" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="{{asset('css/colors/defualt.css')}}">
      
      <!-- Animation Css -->
      <link href="{{asset('css/animate.min.css" rel="stylesheet')}}">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
      <!-- Menu Hover -->
      <link href="{{asset('css/bootstrap-dropdownhover.min.css')}}" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="{{asset('js/modernizr.js')}"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
    @include('header')
       
      <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-=
      <section class="breadcrumbs-area parallex">
         <div class="container">
            <div class="row">
               <div class="page-title">
                  <div class="col-sm-12 col-md-6 page-heading text-left">
                     <h3>Who we are</h3>
                     <h2>About Our Company</h2>
                  </div>
                  <div class="col-sm-12 col-md-6 text-right">
                     <ul class="breadcrumbs">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Company Profile</a></li>
                        </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= About Section =-=-=-=-=-=-= -->
      <section class="section-padding-70" id="about">
         <div class="container">
            <div class="row clearfix">
               <!--Column-->
               <div class="col-md-10 col-sm-12 col-xs-12 ">
                  <div class="about-title">
                     <h2 style="color:orange">Our Origin</h2>
                     <p>MML Consulting Ltd is a consulting and management service provider that began operations out of Nigeria in 2007, formally incorporated in 2012 and playing a role in the supply and management of human capital, business set up and advisory services. </p>
                     
					 <h2 style="color:orange">Our Value proposition</h2>
					 <p>Our ability to provide turnkey services focusing on our clients vision, and delivering last mile thereby enabling our clients focus on core competencies without diminishing on industry and global standards. We are in business simply to serve our clients.  </p>
              <br/> <img class="img-responsive" alt="Image" src="images/mission.png"> <h2 style="color:orange">Our Development</h2>
					 <p>Over the last few years, MML has grown to become a  key resource partner for start-ups and SMEs providing a range of services to enable clients focus on their core expertise. </p>
                  <h2 style="color:orange">Our People</h2>
					 <p>MML is  made up of a team of professional and resourceful partners and consultants with over 100 years of combined working experience at various levels and sectors including oil & gas, Marine, Aviation, Power, Telecoms, FMCG working in synergy with the clients to provide tailor made solutions for client requirement. </p>
                   </div>
				  
               </div>
               <!-- RIght Grid Form 
               <div class="col-md-5 col-sm-12 col-xs-12 our-gallery hidden-sm">
                  <a class="tt-lightbox" href="#"> <img class="img-responsive" alt="Image" src="images/mission.png"></a>
               </div>-->
            </div>
         </div>
      </section>
      <!-- =-=-=-=-=-=-= About End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= SEPARATOR Fun Facts =-=-=-=-=-=-= -->
      <div class="parallex section-padding fun-facts-bg text-center" >
         <div class="container">
            <div class="row">
               <!-- countTo -->
               <div class="col-xs-6 col-sm-3 col-md-3">
			    <p><i style ="font-size: 60px;"class="w3-jumbo w3-spin w3-xlarge 	fa fa-line-chart"></i></p>
                  <div class="statistic-percent" data-perc="30000">
                     <!--<div class="facts-icons"> <span class="flaticon-pie-chart-1"></span> </div>-->
                     <div class="fact">
                        <span class="percentfactor">30,000</span>
                        <p>Size of Talent Pipeline</p>
                     </div>
                     <!-- end fact -->
                  </div>
                  <!-- end statistic-percent -->
               </div>
               <!-- end col-xs-6 col-sm-3 col-md-3 -->
               <!-- countTo -->
               <div class="col-xs-6 col-sm-3 col-md-3">
			    <p><i style ="font-size: 60px;"class="w3-jumbo w3-spin w3-xlarge fa fa-spinner"></i></p>
                  <div class="statistic-percent" data-perc="95">
                     <!--<div class="facts-icons"> <span class="flaticon-graph-3"></span> </div>-->
                     <div class="fact">
                        <span class="percentfactor">95</span>
                        <p>% of on time completion </p>
                     </div>
                     <!-- end fact -->
                  </div>
                  <!-- end statistic-percent -->
               </div>
               <!-- end col-xs-6 col-sm-3 col-md-3 -->
               <!-- countTo -->
               <div class="col-xs-6 col-sm-3 col-md-3">
			    <p><i style ="font-size: 60px;"class="w3-jumbo w3-spin w3-xlarge fa fa-transgender-alt"></i></p>
                  <div class="statistic-percent" data-perc="40">
                     <!--<div class="facts-icons"> <span class="flaticon-diagram"></span> </div>-->
                     <div class="fact">
                        <span class="percentfactor">40+</span>
                        <p>Clients across several sectors</p>
                     </div>
                     <!-- end fact -->
                  </div>
                  <!-- end statistic-percent -->
               </div>
               <!-- end col-xs-6 col-sm-3 col-md-3 -->
               <!-- countTo -->
               <div class="col-xs-6 col-sm-3 col-md-3">
			   <p><i style ="font-size: 60px;"class="w3-jumbo w3-spin w3-xlarge fa fa-arrows-alt"></i></p>
                  <div class="statistic-percent" data-perc="200">
				  
                   <!--  <div class="facts-icons"> <span class="flaticon-receipt"></span> </div>-->
                     <div class="fact">
                        <span class="percentfactor">200 </span>
                        <p>years of experience from our consultants</p>
                     </div>
                     <!-- end fact -->
                  </div>
                  <!-- end statistic-percent -->
               </div>
               <!-- end col-xs-6 col-sm-3 col-md-3 -->
            </div>
            <!-- End row -->
         </div>
         <!-- end container -->
      </div>
      <!-- =-=-=-=-=-=-= SEPARATOR END =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Our Team =-=-=-=-=-=-= -->
   
      <!-- =-=-=-=-=-=-= Our Team End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Our Clients =-=-=-=-=-=-= -->
     
      <!-- =-=-=-=-=-=-= Our Clients -end =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
      <footer class="footer-area">
         @include('footer')
      </footer>
      
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
      <div class="modal fade " id="request-quote" role="dialog"  aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="quotation-box-1">
                     <h2>Request a Call Back</h2>
                     <div class="desc-text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                     </div>
                     <form action="http://html.glixentech.com/go-finance/demos/go-finance/contact.html" method="post">
                        <div class="row clearfix">
                           <!--Form Group-->
                           <div class="form-group col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" placeholder="Your Name" value="" name="your-name">
                           </div>
                           <!--Form Group-->
                           <div class="form-group col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" placeholder="Subject" value="" name="your-subject">
                           </div>
                           <!--Form Group-->
                           <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <input class="form-control" type="email" placeholder="Email Address" value="" name="your-email">
                           </div>
                           <!--Form Group-->
                           <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <select class="form-control">
                                 <option>Share Market Trading</option>
                                 <option>Market Hosting</option>
                                 <option>Presidency Share</option>
                                 <option>Other Topic</option>
                              </select>
                           </div>
                           <!--Form Group-->
                           <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <textarea class="form-control" rows="7" cols="20" placeholder="Your Message" name="your-message"></textarea>
                           </div>
                           <!--Form Group-->
                           <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right"> <a class="custom-button light">Submit Request</a> </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
   </body>

<!-- Mirrored from html.glixentech.com/go-finance/demos/go-finance/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 13:51:01 GMT -->
</html>

@endsection