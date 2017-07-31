 <header class="header-area">
         <!-- Logo Bar -->
         <div class="logo-bar">
            <div class="container clearfix">
               <!-- Logo -->
               <div class="logo">
                  <a href="index.html"><img src="{{asset('images/logo.jpg')}}" width ="120" height="120" alt=""></a>
               </div>
               <!--Info Outer-
               <div class="information-content">
                  <!--Info Box-
                  <div class="info-box  hidden-sm">
                     <div class="icon"><span class="icon-envelope"></span></div>
                     <div class="text">EMAIL</div>
                     <a href="mailt:dean@mml.com.ng">dean@mml.com.ng</a> 
                  </div>
                  <!--Info Box--
                  <div class="info-box">
                     <div class="icon"><span class="icon-phone"></span></div>
                     <div class="text">Call Now</div>
                     <a class="location" href="#">(92) 123-456-78</a> 
                  </div>
                  <div class="info-box">
                     <div class="icon"><span class="icon-map-pin"></span></div>
                     <div class="text">Find Us</div>
                     <a class="location" href="#">Model Town, Nigeria</a> 
                  </div>
               </div> -->
            </div>
         </div>
         <!-- Header Top End -->
         <!-- Menu Section -->
         <div class="navigation-2">
            <!-- navigation-start -->
            <nav class="navbar navbar-default ">
               <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-navigation">
                     <ul class="nav navbar-nav">
                         
                              <li><a href="{{url('/')}}">Home </a> </li>
                            
                        <li class="dropdown">
                           <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">About Us <span class="fa fa-angle-down"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{route('about')}}">Company Profile </a> </li>
                              <li><a href="{{route('value')}}">Our Value System</a> </li>
							  <li><a href="{{route('team')}}">Our Team</a> </li>
							  <li><a href="{{route('consult')}}">Consulting for MML</a> </li>
                              <li><a href="{{route('employee')}}">Who We Hire</a> </li>
                              
                           </ul>
                        </li>
                        <li class="dropdown ">
                           <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Our Services <span class="fa fa-angle-down"></span></a>
                           <ul class="dropdown-menu">
                            <!--  <li><a href="services.php">Services</a> </li> -->
							  <li><a href="{{route('human')}}">Human Capital Development</a> </li>
							  <li><a href="{{route('business')}}">Business Advisory Services</a> </li>
							  <li><a href="{{route('marine')}}">Marine Support</a> </li>                              
							  <li><a href="{{route('case1')}}"> Case Studies</a> </li>
							 
                              </ul>
                        </li>
                        <li class="hidden-sm"><a href="{{route('job')}}">Job Centre</a></li>
                        <li class="dropdown">
                           <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">MML Academy <span class="fa fa-angle-down"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{route('academy')}}">MML Internship Academy (MIA) </a> </li>
                              <li><a href="{{route('success')}}">Success Story</a> </li>
							  <li><a href="{{route('cr')}}">CR2BR</a> </li>
                               
                           </ul>
                        </li>
                         <li><a href="http://mml.com.ng/blog">Blog</a></li>
						<li><a href="{{route('contact')}}">Contact Us</a></li>
                     </ul>
                    <!-- <a  href="cr.php"  class="btn btn-primary pull-right"><span class="hidden-sm">CR</span>2BR</a> -->
                  </div>
                  <!-- /.navbar-collapse -->
               </div>
               <!-- /.container-end -->
            </nav>
         </div>
         <!-- /.navigation-end -->
         <!-- Menu  End -->
      </header>