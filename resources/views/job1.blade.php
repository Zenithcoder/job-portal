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
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="css/flaticon.css" rel="stylesheet">
    <!-- Theme Color -->
    <link rel="stylesheet" id="color" href="css/colors/defualt.css">
    <!-- For Style Switcher -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
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
<div class="error-title" style="color:orange;">CURRENT OPENINGS</div>
            <!-- Row -->
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
				<ul>
                    <li><a href="{{route('job11')}}" target="_blank"> General Manager </a></li>
					
					 @forelse($roles as $role)
                     <li><a href="{{route('jobadmin', $role->id )}}" target="_blank">{{ $role->role}}</a></li>
                      @empty

                                                <h3>&nbsp;&nbsp;&nbsp; </h3>

                                            @endforelse
                    </ul>
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
 <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
    <div class="modal fade " id="request-quote" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <div class="quotation-box-1">
                        <h2>Job Application</h2>
                        <div class="desc-text">
                            <p>Fill in your details appropriately</p>
                        </div>
                        <form action="job.php" id ="myform" method="post" enctype="multipart/form-data" >
                            <div class="row clearfix">
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Your Full Names" value="" name="name">
                                </div>
								
								<!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="email" placeholder="Email Address" value="" name="email">
                                </div>
                                <!--Form Group-->
								<!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="phone" placeholder="phone" value="" name="phone">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Position Applying For" value="" name="position">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                        <select placeholder="Highest Level of Education" class="form-control" name ="level">
                                	<option>Highest Level of Education</option>
									<option>Primary School</option>
                                    <option>High School</option>
                                    <option>Bachelors Degree</option>
                                    <option>Masters Degree</option>
                                	</select>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label>  Please upload your cv/resume  <input type="file" class="form-control" rows="7" cols="20" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document" placeholder="upload your cv/resume" name="my_file"></label>
                                </div>
                                <!--Form Group
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right"> <a class="custom-button light">Submit</a> </div>
								<div><input type="submit" name="submit" class="btn btn-default" id="submitnote" value="Submit" form="modal-form" /> </div>-->
								<button onclick="form_submit()" name='tag_search' value='tag' class="btn btn-default"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


				<script type="text/javascript">
  function form_submit() {
    document.getElementById("myform").submit();
   }    
  </script>
  
<?php if($_POST && isset($_FILES['my_file']))
{

    $from_email         = 'noreply@mml.com.ng'; //from mail, it is mandatory with some hosts
    $recipient_email    = 'recruitment@mml.com.ng'; //recipient email (most cases it is your personal email)
    
    //Capture POST data from HTML form and Sanitize them, 
    $sender_name    = filter_var($_POST["sender_name"], FILTER_SANITIZE_STRING); //sender name
    $reply_to_email = filter_var($_POST["sender_email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
    $subject        = filter_var($_POST["position"], FILTER_SANITIZE_STRING); //get subject from HTML form
    $message        = "Candidate Name: ".filter_var($_POST["name"], FILTER_SANITIZE_STRING); //message
	 $message        .= "Email: ".filter_var($_POST["email"], FILTER_SANITIZE_STRING)."\n"; //message
	  $message        .= "phone: ".filter_var($_POST["phone"], FILTER_SANITIZE_STRING)."\n"; //message
	   $message        .= "position apply for: ". filter_var($_POST["position"], FILTER_SANITIZE_STRING)."\n"; //message
	   $message        .= "highest qualification level: ". filter_var($_POST["level"], FILTER_SANITIZE_STRING)."\n"; //message 
    
    /* //don't forget to validate empty fields 
    if(strlen($sender_name)<1){
        die('Name is too short or empty!');
    } 
    */
    
    //Get uploaded file data
    $file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];
    $file_error       = $_FILES['my_file']['error'];

    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

        $boundary = md5("sanwebe");
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message)); 
        
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content; 
    
    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        die('Thank you for your email');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');  
    }

}?>
				
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
</body>


<!-- Mirrored from html.glixentech.com/go-finance/demos/go-finance/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 13:53:49 GMT -->
</html>