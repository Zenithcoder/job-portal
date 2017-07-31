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
 <div class="error-title" style="color:orange;">APPLY FOR CURRENT OPENINGS</div>
            <!-- Row -->
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
             
                        <div class="desc-text">
                            <p>Fill in your details appropriately</p>
                        </div>
                        <form action="job3.php" id ="myform" method="post" enctype="multipart/form-data" >
                            <div class="row clearfix">
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                  <label> Full Names</label> <span style="color:red;">*</span><input class="form-control" type="text" placeholder="Your Full Names" value="" name="name" required> 
                                </div>
								
								<!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                  <label>E-mail</label> <span style="color:red;">*</span>  <input class="form-control" type="email" placeholder="Email Address" value="" name="email" required>
                                </div>
                                <!--Form Group-->
								<!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <label> Telephone</label><span style="color:red;">*</span>  <input class="form-control" type="phone" placeholder="phone" value="" name="phone" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                  <label> Country</label><span style="color:red;">*</span> <select placeholder="Country" class="form-control" name="country" required>
	<option value="AF">Afghanistan</option>
	<option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
</select>
                                </div>
                                
                                <!--Form Group -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                         <label> Education</label>        <span style="color:red;">*</span>                        <select placeholder="Highest Level of Education" class="form-control" name ="level" required>
                                										
                                    <option>High School</option>
                                    <option>Bachelors Degree</option>
                                    <option>Masters Degree</option>
                                    <option>PHD/Fellowship</option>
                                	</select>
                                </div>
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <label> Current Employer</label> <span style="color:red;">*</span> <input class="form-control" type="text" placeholder="current employer" value="" name="employer" required>
                                </div>
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <label>Role to be considered for</label> <span style="color:red;">*</span> <input class="form-control" type="text" placeholder="Role to be considered for" value="" name="role" required>
                                </div>
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <label> Years of relevant experience</label> <span style="color:red;">*</span> <input class="form-control" type="text" placeholder="Years of relevant experience" value="" name="exper" required>
                                </div>
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <label>Current Net Salary (Naira or Dollars)</label> <span style="color:red;">*</span> <input class="form-control" type="text" placeholder="Current Net Salary (Naira or Dollars)" value="" name="salary" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label>  Please upload your cv/resume <h6>accepted file format(.docx or .pdf) & size (max 500kb)</h6> <span style="color:red;">*</span> <input type="file" class="form-control" rows="7" cols="20" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document" placeholder="upload your cv/resume" name="my_file" required></label>
                                </div>
                                <!--Form Group -->
                                <!--<div class="form-group col-md-12 col-sm-12 col-xs-12 text-right"> <a class="custom-button light">Submit</a> </div>-->
								<div><label><input type="submit" name="button" value="Submit" /></label> </div>
								
                            </div>
                        </form>
                    </div>
                      </div>
                      <div>
<a href="{{route('job')}}" class="btn btn-info btn-lg">To Job Centre</a>
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
 				
  
<?php if($_POST && isset($_FILES['my_file']))
{

    $from_email         = 'info@mml.com.ng'; //from mail, it is mandatory with some hosts
    $recipient_email    = 'recruitment@mml.com.ng'; //recipient email (most cases it is your personal email)
    
    //Capture POST data from HTML form and Sanitize them, 
    $sender_name    = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //sender name
    $reply_to_email = filter_var($_POST["email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
    $subject        = filter_var($_POST["role"], FILTER_SANITIZE_STRING); //get subject from HTML form
    $message        = "Candidate Name: ".filter_var($_POST["name"], FILTER_SANITIZE_STRING); //message
	 $message        .= "Email: ".filter_var($_POST["email"], FILTER_SANITIZE_STRING)."\n"; //message
	  $message        .= "phone: ".filter_var($_POST["phone"], FILTER_SANITIZE_STRING)."\n"; //message
	   $message        .= "country: ". filter_var($_POST["country"], FILTER_SANITIZE_STRING)."\n"; //message
	   $message        .= "Current Employer: ". filter_var($_POST["employer"], FILTER_SANITIZE_STRING)."\n"; //message
	   $message        .= "Role you are apply for: ". filter_var($_POST["role"], FILTER_SANITIZE_STRING)."\n"; //message
	   $message        .= "Years of relevant experience: ". filter_var($_POST["exper"], FILTER_SANITIZE_STRING)."\n"; //message
	     $message        .= "Years of relevant experience: ". filter_var($_POST["exper"], FILTER_SANITIZE_STRING)."\n"; //message
	    $message        .= "Current Net Salary: ". filter_var($_POST["salary"], FILTER_SANITIZE_STRING)."\n"; //message
    
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
	die("Your application has been received. A recruiter will contact you if your profile matches any of our future openings");
        
    }else{
 
	die("unsuccesful, resubmit please");
        
    }

}?>
				
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
</body>


<!-- Mirrored from html.glixentech.com/go-finance/demos/go-finance/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 13:53:49 GMT -->
</html>