
@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      

      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>MML Consulting </title>
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
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="css/owl.style.css">
      <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic%7CMerriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="css/flaticon.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Magnific PopUP CSS =-=-=-=-=-=-= -->
      <link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="css/colors/defualt.css">
      
      <!-- Revolution Slider 5.x CSS settings -->
      <!-- For This Page Only -->
      <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
      <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
      <!-- Animation Css -->
      <link href="css/animate.min.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="css/select2.min.css" rel="stylesheet" />
      <!-- Menu Hover -->
      <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      
   </head>
   <body>
      <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-=
      <div id="header-info-bar">
         <div class="container">
         <!--	<div class="col-md-6 col-sm-6 col-xs-12">
            <ul class="header-social pull-left">
               <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#" class="social-linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>--
            <div class="col-md-6 col-sm-6 col-xs-12">
             <a href="job.php" class="info-bar-meta-link"><i class="fa fa-caret-right fa-fw"></i>Careers</a>
            </div>
         </div>
      </div> -->
     @include('header')
      <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= HOME SLIDER =-=-=-=-=-=-= -->
      <div class="rev_slider_wrapper">
         <div class="rev_slider" data-version="5.0">
            <ul>
               <!-- SLIDE 1 -->
               <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slider/12.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme text-white text-uppercase" 
                     id="rs-3-layer-1"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['-125']"
                     data-fontsize="['26']"
                     data-lineheight="['64']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on" 
                     style="z-index: 5; white-space: nowrap; font-weight:700;">Great experience
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-merry" 
                     id="rs-3-layer-2"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['-60']"
                     data-fontsize="['40']"
                     data-lineheight="['84']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on" 
                     style="z-index: 5; white-space: nowrap; font-weight:600; "><span class="text-white">Meet our team of resourceful consultants </span>
                  </div>
                  <!-- LAYER NR. 2 -->
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white" 
                     id="rs-3-layer-3"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['20']"
                     data-fontsize="['18']"
                     data-lineheight="['34']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1400" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; font-weight:300;">professional and resourceful partners and consultants with over 100 years of combined working experience <br/> at various levels and sectors including oil & gas, Marine, Aviation, Power, Telecoms. 
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" 
                     id="rs-3-layer-4"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['100']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1600" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                      
                  </div>
               </li>
               <!-- SLIDE 2 -->
               <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-2.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slider/6.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white " 
                     id="rs-1-layer-1"
                     data-x="['right']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['-125']"
                     data-fontsize="['26']"
                     data-lineheight="['64']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on" 
                     style="z-index: 5; white-space: nowrap; font-weight:700;">We Provide Solutions
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-white font-merry  text-uppercase" 
                     id="rs-1-layer-2"
                     data-x="['right']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['-60']"
                     data-fontsize="['40']"
                     data-lineheight="['84']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on" 
                     style="z-index: 5; white-space: nowrap; font-weight:700;"> Grow Your Business
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-right text-white" 
                     id="rs-1-layer-3"
                     data-x="['right']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['30']"
                     data-fontsize="['18']"
                     data-lineheight="['34']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1400" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; font-weight:400; color:purple;">We always gain our client's trust and satisfaction by putting our best foot forward and providing <br>solutions to meet their needs.
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" 
                     id="rs-1-layer-4"
                     data-x="['right']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['100']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1600" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"> 
                  </div>
               </li>
               <!-- SLIDE 3 -->
               <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-3.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slider/13.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-center text-white" 
                     id="rs-2-layer-2"
                     data-x="['center']"
                     data-hoffset="['0']"
                     data-y="['middle']"
                     data-voffset="['-60']"
                     data-fontsize="['26']"
                     data-lineheight="['64']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; font-weight:400;">- Providing Services Since 2007 -
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-merry" 
                     id="rs-2-layer-3"
                     data-x="['center']"
                     data-hoffset="['0']"
                     data-y="['middle']"
                     data-voffset="['0']"
                     data-fontsize="['40']"
                     data-lineheight="['80']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; line-height: 90%; font-weight:800;">MML Consulting Ltd
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" 
                     id="rs-2-layer-4"
                     data-x="['center']"
                     data-hoffset="['0']"
                     data-y="['middle']"
                     data-voffset="['80']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1400" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"> 
                  </div>
               </li>
               <!-- SLIDE 4 -->
               <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/thumb-4.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slider/14.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme text-white text-uppercase" 
                     id="rs-3-layer-5"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['-125']"
                     data-fontsize="['26']"
                     data-lineheight="['64']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on" 
                     style="z-index: 5; white-space: nowrap; font-weight:700;"> people. process. product 
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase font-merry" 
                     id="rs-3-layer-8"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['-60']"
                     data-fontsize="['40']"
                     data-lineheight="['84']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on" 
                     style="z-index: 5; white-space: nowrap; font-weight:600; "><span class="text-white">your vision is our mission </span>
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white" 
                     id="rs-3-layer-9"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['20']"
                     data-fontsize="['18']"
                     data-lineheight="['34']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1400" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; font-weight:300;"> 
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" 
                     id="rs-3-layer-10"
                     data-x="['left']"
                     data-hoffset="['30']"
                     data-y="['middle']"
                     data-voffset="['100']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;s:500"
                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1600" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                  </div>
               </li>
            </ul>
         </div>
         <!-- end .rev_slider -->
      </div>
      <!--======= HOME SLIDER END =========-->
      <!-- =-=-=-=-=-=-= Call To Action =-=-=-=-=-=-= -->
       
      <!-- =-=-=-=-=-=-= Call To Action End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Services =-=-=-=-=-=-= -
      <section class="custom-padding white" id="about-section-3">
         <div class="container">
            <div class="main-boxes">
               <div class="row">
                  <div class="col-sm-6 col-md-4 col-xs-12">
                     <div class="services-grid-1">
                        <div class="service-image">
                           <a href="#"><img alt="" src="images/1.jpg"></a>
                        </div>
                        <div class="services-text">
                           <h4>Human Capital Development</h4>
                           <p>Recruitment and Talent Acquisition | Executive Search and Placemnt | Personnel Management & Outsourcing</p>
                        </div>
                        <div class="more-about"> <a class="btn btn-primary btn-lg" href="services.php">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
                     </div>
                     <!-- end services-grid-1 --
                  </div>
                  <!-- end col-sm-4 --
                  <div class="col-sm-6 col-md-4 col-xs-12">
                     <div class="services-grid-1">
                        <div class="service-image">
                           <a href="#"><img alt="" src="images/2.jpg"></a>
                        </div>
                        <div class="services-text">
                           <h4>Business Advisory Services</h4>
                           <p>Business Set Up | Documentation for registrations with regulatory bodies | Business Process Re-engineering</p>
                        </div>
                        <div class="more-about"> <a class="btn btn-primary btn-lg" href="services.php">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
                     </div>
                     <!-- end services-grid-1 --
                  </div>
                  <!-- end col-sm-4 --
                  <div class="col-sm-6 col-md-4 col-xs-12">
                     <div class="services-grid-1">
                        <div class="service-image">
                           <a href="#"><img alt="" src="images/3.jpg"></a>
                        </div>
                        <div class="services-text">
                           <h4>Marine Support</h4>
                           <p>Equipment Procurement <br/>| Equipment Brokering <br/>| Equipment Maintenance</p>
                        </div>
                        <div class="more-about"> <a class="btn btn-primary btn-lg" href="services.php">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
                     </div>
                     <!-- end services-grid-1 
                  </div>
                  <!-- end col-sm-4 -
               </div>
            </div>
            <!-- end main-boxes 
         </div>
         <!-- end container -
      </section>-->
      <!-- =-=-=-=-=-=-= Services =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Our Services =-=-=-=-=-=-= -->
      <section class="custom-padding services">
         <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
               <h2 style="color:orange">Why People Choose Us</h2>
               <p>We are committed to delivering work to the highest standard of professionalism and quality.</p>
            </div>
            <!-- End title-section -->
            <!-- Row -->
            <div class="row">
               <div id="services">
                  <!-- Service Item List -->
                  <div class="item">
                     <!-- services grid -->
                     <div class="services-grid">
                        <div class="icons"> <i class="flaticon-graph-2"></i></div>
                        <h4 style="color:orange">Professionalism</h4>
                        <p>We deliver solutions to our clients On time delivery, every time with  integrity..</p>
                     </div>
                  </div>
                  <!-- services grid -->
                  <div class="item">
                     <div class="services-grid">
                        <div class="icons"> <i class="flaticon-insert-coin"></i></div>
                        <h4 style="color:orange">Innovation</h4>
                        <p>Our solutions are designed to change the way the business operates..</p>
                       </div>
                  </div>
                  <!-- services grid -->
                  <div class="item">
                     <div class="services-grid">
                        <div class="icons"> <i class="flaticon-safebox-3"></i></div>
                        <h4 style="color:orange">Patriotism</h4>
                                 <p>We are committed to Nation building through efficiency of labour productivity.</p>
                              
                     </div>
                  </div>
                    
                  <!-- Service Item List End -->
               </div>
            </div>
            <!-- Row End -->
         </div>
         <!-- end container -->
      </section>
      
     <!-- <section  class="testimonial-bg parallex section-padding text-center">
         <div class="container">
            <div id="testimonials">
               <div class="item">
                  <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center">
                     <img src="images/admin-1.jpg" class="img-responsive" alt="Testimonials">
                     <p>Excellent Team Spirit</p>
                     <div class="name">John Doe</div>
                     <div class="profession">Founder, Oxford</div>
                  </div>
               </div>
               <div class="item">
                  <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center">
                     <img src="images/admin-1.jpg" alt="Testimonials" class="img-responsive">
                     <p>Professionalism at its peak</p>
                     <div class="name">John Doe</div>
                     <div class="profession">Founder, Oxford</div>
                  </div>
               </div>
               <div class="item">
                  <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center">
                     <img src="images/admin-1.jpg" alt="Testimonials" class="img-responsive">
                     <p>Satisfactorily Customer Services</p>
                     <div class="name">John Doe</div>
                     <div class="profession">Founder, Oxford</div>
                  </div>
               </div>
               <div class="item">
                  <div class="col-sm-12 col-md-12 col-xs-12 testimonial-grid text-center">
                     <img src="images/admin-1.jpg" alt="Testimonials" class="img-responsive">
                     <p>Innovation and best practices  </p>
                     <div class="name">John Doe</div>
                     <div class="profession">Founder, Oxford</div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end container
      </section> -->
      <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= -->
           <!-- =-=-=-=-=-=-= Our Clients =-=-=-=-=-=-= 
      <section class="section-padding-70 services">
         <div class="container">
            <!-- title-section --
            <div class="main-heading text-center">
               <h2>our clients</h2>
                </div>
            <!-- End title-section --
            <!-- Row --
            <div class="row">
               <div id="clients" class="text-center">
                  <!-- Service Item List --
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_1.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_2.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_3.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_4.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_6.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_7.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_3.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_4.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_5.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_1.png"> </div>
                  </div>
                  <div class="item">
                     <div class="clients-grid"> <img class="img-responsive" alt="" src="images/clients/client_2.png"> </div>
                  </div>
                  <!-- Service Item List End --
               </div>
            </div>
            <!-- Row End --
         </div>
         <!-- end container --

      </section>
      <!-- =-=-=-=-=-=-= Our Clients -end =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
      <footer class="footer-area">
         <!--Footer Upper-->
         @include('footer')
         <!--Footer Bottom-->
         
      </footer>
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
      
      <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Dropdown Hover  -->
      <script src="js/bootstrap-dropdownhover.min.js"></script>
      <!-- Dropdown Hover  -->
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
      <!-- Jquery For Home Page Only  -->
      <!-- Revolution Slider 5.x SCRIPTS -->
      <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
      <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
      <script src="js/slider-setting.js"></script>
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
         (Load Extensions only on Local File Systems ! 
          The following part can be removed on Server for On Demand Loading) -->
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
   
      <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
   </body>

<!-- Mirrored from html.glixentech.com/go-finance/demos/go-finance/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 13:47:43 GMT -->
</html>

@endsection