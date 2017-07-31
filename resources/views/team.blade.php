
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
      <title>Team</title>
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
      <!-- Menu Hover -->
      <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
            <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="css/select2.min.css" rel="stylesheet" />
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
   @include('header')
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= 
      <section class="breadcrumbs-area parallex">
         <div class="container">
            <div class="row">
               <div class="page-title">
                  <div class="col-sm-12 col-md-6 page-heading text-left">
                     <h3>About us</h3>
                     <h2>our team</h2>
                  </div>
                   
               </div>
            </div>
         </div>
      </section>
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= --> 


<section id="team" class="custom-padding white">
         <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
               <h2 style="color:orange">Our Team</h2>
              </div>
            <!-- End title-section -->
            <!-- Row -->
            <div class="row">
               <!-- Team Grid <div data-target="#request-quote" data-toggle="modal">
		  <a class="btn btn-agrresive">click here</a>
	</div> -->
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="team-grid">
                     <div class="team-image">
                        <img alt="" class="img-responsive" src="images/team/4.jpg">
                        <div class="team-grid-overlay">
                          
                        </div>
                     </div>
                     <div class="team-content">
					  <div data-target="#request-quote" data-toggle="modal">
		  <a class="btn btn-agrresive"> <h2 style ="text-align:center; font-size:14px;">Uche Lotanna-Anajemba</h2></a>
		  <p  style ="text-align:center; font-size:14px;">HR Director</p>
		  
	</div>
                       
                        
                     </div>
                  </div>
               </div>
               <!-- Team Grid End-->
               <!-- Team Grid --
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="team-grid">
                     <div class="team-image">
                        <img alt="" class="img-responsive" src="images/team/2.jpg">
                        <div class="team-grid-overlay">
                           <div class="social-media">
                              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                              <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                              <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="team-content">
                        <h2>Jean Carron</h2>
                        <p>Director</p>
                     </div>
                  </div>
               </div>
               <!-- Team Grid End-->
               <!-- Team Grid --
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="team-grid">
                     <div class="team-image">
                        <img alt="" class="img-responsive" src="images/team/3.jpg">
                        <div class="team-grid-overlay">
                           <div class="social-media">
                              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                              <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                              <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="team-content">
                        <h2>Arslan Tariq</h2>
                        <p>CEO</p>
                     </div>
                  </div>
               </div>
               <!-- Team Grid End-->
            </div>
            <!-- Row End -->
         </div>
         <!-- end container -->
      </section>
	   <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
    <div class="modal fade " id="request-quote" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <div class="quotation-box-1">
                        <h2>Uche Lotanna-Anajemba</h2>
                        <div class="desc-text">
                            <p>Uche is Human capital management leader with over 17 years’ experience and an eclectic background in the management of HR and commercial operations across various sectors including oil and gas, engineering, power, aviation, telecommunications and government. 
	
</p><p>Uche has led several commercial and HR departments in different sectors and functions across several companies both multinational and national both within and outside Nigeria including PNN group, Nestoil group, Atlantic Aviation and currently MML Consulting Ltd which she founded and is currently operating as the HR director. 

</p><p>Currently, Uche runs a high impact employability workshop called Class room to board room (CR2BR) with a third edition scheduled for March 2017. The primary focus of this initiative is to bridge the gap between classroom teaching and application of soft skills in the work place as a vehicle for achieving the sustainable development goal (SDG)8 which aims to reduce unemployment, promote labour productivity and trigger economy growth through development oriented training interventions that support employability, innovation and creativity. This project is targeted at raising 100 high potential graduates each year solidified through a targeted on the job training programme.

</p><p>In her role as a business strategist, she is committed in helping organizations develop a winning global strategy through their people as a key asset and operational excellence as a differentiator.  This expertise has seen her speak to several hundreds of corporate and business people on topics like strategic management, performance management, ethics, HR strategy, leadership, mastery and personal branding, organisationalculture and developing winning teams. 

</p><p>Uche is a writer and speaker with a passion for the role of citizenship in Nation development. She is a social enterprise entrepreneur, business strategist and business Image consultant, providing personal branding and fashion retail services for some of the leading Nigeria business executives. 

</p><p>Uche is an alumni of the University of East London business school(M.Sc Information Technology), advanced management programme(AMP21) of Lagos Business School and has completed courses from several leading institutions including Stanford Online learning.

</p><p>She is a member of the Chartered Institute of Personnel Management(CIPM), member of the Nigerian Institute for Training and Development (NITAD) and Nigerian Institute of management (NIM).
</p>
                        </div>
                       
                    </div>
                </div>
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
	  
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
      <!-- Google Map For This Page Only --> 
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&amp;sensor=false"></script>
      <script type="text/javascript" src="js/map.js"></script>
      <script type="text/javascript" src="js/validator.min.js"></script>
      <script type="text/javascript">
         (function($){
             "use strict";
         	$('#contactForm').validator().on('submit', function (e) {
           if (e.isDefaultPrevented()) {
             // handle the invalid form...
           } else {
         	  $("#yes").html('Processsing...');
         	  $('#loader').show();
              $.ajax({
                   type:"POST",
                   url:'php/contact.php',
                   data: $("#contactForm").serialize(),//only input
                   success: function(response){
                    if(response == "success"){
                     $('#success').show();
                     $('#loader').hide();
         			$("#yes").html('Done Email...');
                     $( '#contactForm' ).each(function(){
                      this.reset();
                     });
                    }
                   }
                  });
         		 return false;
           }
         })
         	
         	})(jQuery);
      </script>
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
 
      <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
   </body>
</html>

@endsection