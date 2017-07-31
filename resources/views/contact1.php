

<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->

      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>Contact</title>
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
                     <h3>any question</h3>
                     <h2>Contact  Us</h2>
                  </div>
                   
               </div>
            </div>
         </div>
      </section>-->
      <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= --> 

      <!-- =-=-=-=-=-=-= Contact Us =-=-=-=-=-=-= -->
      <section id="contact-us" class="section-padding-70">
         <div class="container">
            <!-- Row -->
            <div class="row">
               <div class="col-md-8 col-xs-12 col-sm-12  ">
                  <div class="notice success" id="success">
                     <p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
                  </div>
                  <form id="contactForm" action=" " method="post" name ="myform">
                  <div class="row">
                     <div class="col-sm-6">
                        <!-- Name -->
                        <div class="form-group">
                           <label style="color:blue;">Name<span class="required">*</span></label>
                           <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
                        </div>
                     </div>
                     <!-- End col-sm-6 -->
                     <div class="col-sm-6">
                        <!-- Email -->
                        <div class="form-group">
                           <label style="color:blue;" for="email">Email<span class="required">*</span></label>
                           <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                        </div>
                     </div>
                   </div>  
                     <!-- End col-sm-6 -->
                      <div class="row">
                     <div class="col-sm-12">
                        <!-- Email -->
                        <div class="form-group">
                           <label style="color:blue;">Telephone<span class="required">*</span></label>
                           <input type="text" placeholder="telephone" id="phone" name="phone" class="form-control" required>
                        </div>
                     </div>
                     </div>
                     <!-- End col-sm-12 -->
                     
                       <!-- End col-sm-6 
                        <div class="row">
                     <div class="col-sm-12">
                        <!-- Email 
                        <div class="form-group">
                           <label>Topic To Discuss <span class="required">*</span></label>
                            <select class="form-control required">
                                 <option>Human Capital</option>
                                 <option>Business Advisory</option>
                                 <option>Marine Support</option>
                                 <option>Other Topic</option>
                              </select>
                        </div>
                     </div>
                     </div>-->
                     <!-- End col-sm-12 -->
                      <div class="row">
                     <div class="col-sm-12">
                        <!-- Comment -->
                        <div class="form-group">
                           <label style="color:blue;">Message<span class="required">*</span></label>
                           <textarea placeholder="Message..." id="message" name="message"  class="form-control" rows="3" required></textarea>
                        </div>
                     </div>
                     </div>
                     <!-- End col-sm-12 -->
                      <div class="row">
                     <div class="col-sm-12">
                        <button type="submit" id="yes" class="btn btn-primary">Send Message</button>
                        <img id="loader" alt="" src="images/loader.gif" class="loader">
                     </div>
                     </div>
                     <!-- End col-sm-6 -->
                  </form>
               </div>
               <div class="col-md-4 col-xs-12 col-sm-12 margin-top-30">
			   
               <div class="location-box"> <a class="media-left pull-left" href="#"> <!-- <i class=" icon-map"></i>--></a>
                  <div class="media-body"><img class="img-responsive" width ="140px" height="60px" alt="" src="images/contact.png"> <strong></strong>
                    <p>5b Leon Garden, Lekki Lagos</p>
                  </div>
                </div>
                <div class="location-box"> <a class="media-left pull-left" href="#"> <!--<i class=" icon-envelope"></i>--></a>
                  <div class="media-body"><img class="img-responsive" width ="140px" height="60px" alt="" src="images/email.png"><strong></strong>
                    <p>info@mml.com.ng</p>
                  </div>
                </div>
                <div class="location-box"> <a class="media-left pull-left" href="#"><!--<i class="icon-phone"></i>--></a>
                  <div class="media-body"> <img class="img-responsive" width ="140px" height="60px" alt="" src="images/call-us.png"><strong></strong>
                    <p>+2348029998203  </p>
                  </div>
                </div>
                
               </div>
               
               <div class="clearfix"></div>
            </div>
            <!-- Row End --> 
         </div>
         <!-- end container --> 
      </section>
       
	   <footer class="footer-area">
         <?php include('footer.php') ?>
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
      <!--<script type="text/javascript">
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
      </script>-->
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
 
      <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
	  <?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "test@mml.com.ng";
 
    $email_subject = "From contact us Page on MML.com.ng";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['name']; // required
 
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['phone']; // not required
 
    $comments = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($first_name)."\n";
 
   
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Message: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 <script type="text/javascript">
window.alert("Thank you for contacting us. We will be in touch with you very soon")
</script>
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>
	  
   </body>
</html>

