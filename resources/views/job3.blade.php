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
 <div class="error-title" style="color:orange;">APPLY FOR FUTURE OPENINGS</div>
            <!-- Row -->
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
             
                        <div class="desc-text">
                            <p>Fill in your details appropriately</p>
                        </div>
                       
                        <section class="contact-form-section">
        <h3 class="text-bold text-center">.</h3>

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif


<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(['route' => 'store.job3', 'method' => 'post', 'files' => true ]) !!}

<div class="form-group">
    {!! Form::label('Full Name  *') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address  *') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>
<div class="form-group">
    {!! Form::label('Telephone(including country code)  *') !!}
    {!! Form::text('phone', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your Telephone')) !!}
</div>
<div class="form-group">
    {!! Form::label('Nationality  *') !!}
     {!! Form::select('country', array(
'Select a Country' => 'Select a Country',
'Ascension Island' => 'Ascension Island',
'Andorra' => 'Andorra',
'United Arab Emirates' => 'United Arab Emirates',
'Afghanistan' => 'Afghanistan',
'Antigua And Barbuda' => 'Antigua And Barbuda',
'Anguilla' => 'Anguilla',
'Albania' => 'Albania',
'Armenia' => 'Armenia',
'Netherlands Antilles' => 'Netherlands Antilles',
'Angola' => 'Angola',
'Antarctica' => 'Antarctica',
'Argentina' => 'Argentina',
'American Samoa' => 'American Samoa',
'Austria' => 'Austria',
'Australia' => 'Australia',
'Aruba' => 'Aruba',
'Ãƒâ€¦land' => 'Ãƒâ€¦land',
'Azerbaijan' => 'Azerbaijan',
'Bosnia And Herzegovina' => 'Bosnia And Herzegovina',
'Barbados' => 'Barbados',
'Belgium' => 'Belgium',
'Bangladesh' => 'Bangladesh',
'Burkina Faso' => 'Burkina Faso',
'Bulgaria' => 'Bulgaria',
'Bahrain' => 'Bahrain',
'Burundi' => 'Burundi',
'Benin' => 'Benin',
'Bermuda' => 'Bermuda',
'Brunei Darussalam' => 'Brunei Darussalam',
'Bolivia' => 'Bolivia',
'Brazil' => 'Brazil',
'Bahamas' => 'Bahamas',
'Bhutan' => 'Bhutan',
'Bouvet Island' => 'Bouvet Island',
'Botswana' => 'Botswana',
'Belarus' => 'Belarus',
'Belize' => 'Belize',
'Canada' => 'Canada',
'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
'Congo (Democratic Republic)' => 'Congo (Democratic Republic)',
'Central African Republic' => 'Central African Republic',
'Congo (Republic)' => 'Congo (Republic)',
'Switzerland' => 'Switzerland',
'Cote DÃ¢â‚¬â„¢Ivoire' => 'Cote DÃ¢â‚¬â„¢Ivoire',
'Cook Islands' => 'Cook Islands',
'Chile' => 'Chile',
'Cameroon' => 'Cameroon',
'PeopleÃ¢â‚¬â„¢s Republic of China' => 'PeopleÃ¢â‚¬â„¢s Republic of China',
'Colombia' => 'Colombia',
'Costa Rica' => 'Costa Rica',
'Cuba' => 'Cuba',
'Cape Verde' => 'Cape Verde',
'Christmas Island' => 'Christmas Island',
'Cyprus' => 'Cyprus',
'Czech Republic' => 'Czech Republic',
'Germany' => 'Germany',
'Djibouti' => 'Djibouti',
'Denmark' => 'Denmark',
'Dominica' => 'Dominica',
'Dominican Republic' => 'Dominican Republic',
'Algeria' => 'Algeria',
'Ecuador' => 'Ecuador',
'Estonia' => 'Estonia',
'Egypt' => 'Egypt',
'Eritrea' => 'Eritrea',
'Spain' => 'Spain',
'Ethiopia' => 'Ethiopia',
'European Union' => 'European Union',
'Finland' => 'Finland',
'Fiji' => 'Fiji',
'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
'Micronesia, Federated States Of' => 'Micronesia, Federated States Of',
'Faroe Islands' => 'Faroe Islands',
'France' => 'France',
'Gabon' => 'Gabon',
'United Kingdom' => 'United Kingdom',
'Grenada' => 'Grenada',
'Georgia' => 'Georgia',
'French Guiana' => 'French Guiana',
'Guernsey' => 'Guernsey',
'Ghana' => 'Ghana',
'Gibraltar' => 'Gibraltar',
'Greenland' => 'Greenland',
'Gambia' => 'Gambia',
'Guinea' => 'Guinea',
'Guadeloupe' => 'Guadeloupe',
'Equatorial Guinea' => 'Equatorial Guinea',
'Greece' => 'Greece',
'South Georgia And The South Sandwich Islands' => 'South Georgia And The South Sandwich Islands',
'Guatemala' => 'Guatemala',
'Guam' => 'Guam',
'Guinea-Bissau' => 'Guinea-Bissau',
'Guyana' => 'Guyana',
'Hong Kong' => 'Hong Kong',
'Heard And Mc Donald Islands' => 'Heard And Mc Donald Islands',
'Honduras' => 'Honduras',
'Croatia (local name: Hrvatska)' => 'Croatia (local name: Hrvatska)',
'Haiti' => 'Haiti',
'Hungary' => 'Hungary',
'Indonesia' => 'Indonesia',
'Ireland' => 'Ireland',
'Israel' => 'Israel',
'Isle of Man' => 'Isle of Man',
'India' => 'India',
'British Indian Ocean Territory' => 'British Indian Ocean Territory',
'Iraq' => 'Iraq',
'Iran (Islamic Republic Of)' => 'Iran (Islamic Republic Of)',
'Iceland' => 'Iceland',
'Italy' => 'Italy',
'Jersey' => 'Jersey',
'Jamaica' => 'Jamaica',
'Jordan' => 'Jordan',
'Japan' => 'Japan',
'Kenya' => 'Kenya',
'Kyrgyzstan' => 'Kyrgyzstan',
'Cambodia' => 'Cambodia',
'Kiribati' => 'Kiribati',
'Comoros' => 'Comoros',
'Saint Kitts And Nevis' => 'Saint Kitts And Nevis',
'Korea, Republic Of' => 'Korea, Republic Of',
'Kuwait' => 'Kuwait',
'Cayman Islands' => 'Cayman Islands',
'Kazakhstan' => 'Kazakhstan',
'Lao PeopleÃ¢â‚¬â„¢s Democratic Republic' => 'Lao PeopleÃ¢â‚¬â„¢s Democratic Republic',
'Lebanon' => 'Lebanon',
'Saint Lucia' => 'Saint Lucia',
'Liechtenstein' => 'Liechtenstein',
'Sri Lanka' => 'Sri Lanka',
'Liberia' => 'Liberia',
'Lesotho' => 'Lesotho',
'Lithuania' => 'Lithuania',
'Luxembourg' => 'Luxembourg',
'Latvia' => 'Latvia',
'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
'Morocco' => 'Morocco',
'Monaco' => 'Monaco',
'Moldova, Republic Of' => 'Moldova, Republic Of',
'Montenegro' => 'Montenegro',
'Madagascar' => 'Madagascar',
'Marshall Islands' => 'Marshall Islands',
'Macedonia, The Former Yugoslav Republic Of' => 'Macedonia, The Former Yugoslav Republic Of',
'Mali' => 'Mali',
'Myanmar' => 'Myanmar',
'Mongolia' => 'Mongolia',
'Macau' => 'Macau',
'Northern Mariana Islands' => 'Northern Mariana Islands',
'Martinique' => 'Martinique',
'Mauritania' => 'Mauritania',
'Montserrat' => 'Montserrat',
'Malta' => 'Malta',
'Mauritius' => 'Mauritius',
'Maldives' => 'Maldives',
'Malawi' => 'Malawi',
'Mexico' => 'Mexico',
'Malaysia' => 'Malaysia',
'Mozambique' => 'Mozambique',
'Namibia' => 'Namibia',
'New Caledonia' => 'New Caledonia',
'Niger' => 'Niger',
'Norfolk Island' => 'Norfolk Island',
'Nigeria' => 'Nigeria',
'Nicaragua' => 'Nicaragua',
'Netherlands' => 'Netherlands',
'Norway' => 'Norway',
'Nepal' => 'Nepal',
'Nauru' => 'Nauru',
'Niue' => 'Niue',
'New Zealand' => 'New Zealand',
'Oman' => 'Oman',
'Panama' => 'Panama',
'Peru' => 'Peru',
'French Polynesia' => 'French Polynesia',
'Papua New Guinea' => 'Papua New Guinea',
'Philippines, Republic of the' => 'Philippines, Republic of the',
'Pakistan' => 'Pakistan',
'Poland' => 'Poland',
'St. Pierre And Miquelon' => 'St. Pierre And Miquelon',
'Pitcairn' => 'Pitcairn',
'Puerto Rico' => 'Puerto Rico',
'Palestine' => 'Palestine',
'Portugal' => 'Portugal',
'Palau' => 'Palau',
'Paraguay' => 'Paraguay',
'Qatar' => 'Qatar',
'Reunion' => 'Reunion',
'Romania' => 'Romania',
'Serbia' => 'Serbia',
'Russian Federation' => 'Russian Federation',
'Rwanda' => 'Rwanda',
'Saudi Arabia' => 'Saudi Arabia',
'United Kingdom' => 'United Kingdom',
'Solomon Islands' => 'Solomon Islands',
'Seychelles' => 'Seychelles',
'Sudan' => 'Sudan',
'Sweden' => 'Sweden',
'Singapore' => 'Singapore',
'St. Helena' => 'St. Helena',
'Slovenia' => 'Slovenia',
'Svalbard And Jan Mayen Islands' => 'Svalbard And Jan Mayen Islands',
'Slovakia (Slovak Republic)' => 'Slovakia (Slovak Republic)',
'Sierra Leone' => 'Sierra Leone',
'San Marino' => 'San Marino',
'Senegal' => 'Senegal',
'Somalia' => 'Somalia',
'Suriname' => 'Suriname',
'Sao Tome And Principe' => 'Sao Tome And Principe',
'Soviet Union' => 'Soviet Union',
'El Salvador' => 'El Salvador',
'Syrian Arab Republic' => 'Syrian Arab Republic',
'Swaziland' => 'Swaziland',
'Turks And Caicos Islands' => 'Turks And Caicos Islands',
'Chad' => 'Chad',
'French Southern Territories' => 'French Southern Territories',
'Togo' => 'Togo',
'Thailand' => 'Thailand',
'Tajikistan' => 'Tajikistan',
'Tokelau' => 'Tokelau',
'East Timor (new code)' => 'East Timor (new code)',
'Turkmenistan' => 'Turkmenistan',
'Tunisia' => 'Tunisia',
'Tonga' => 'Tonga',
'East Timor (old code)' => 'East Timor (old code)',
'Turkey' => 'Turkey',
'Trinidad And Tobago' => 'Trinidad And Tobago',
'Tuvalu' => 'Tuvalu',
'Taiwan' => 'Taiwan',
'Tanzania, United Republic Of' => 'Tanzania, United Republic Of',
'Ukraine' => 'Ukraine',
'Uganda' => 'Uganda',
'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
'United States' => 'United States',
'Uruguay' => 'Uruguay',
'Uzbekistan' => 'Uzbekistan',
'Vatican City State (Holy See)' => 'Vatican City State (Holy See)',
'Saint Vincent And The Grenadines' => 'Saint Vincent And The Grenadines',
'Venezuela' => 'Venezuela',
'Virgin Islands (British)' => 'Virgin Islands (British)',
'Virgin Islands (U.S.)' => 'Virgin Islands (U.S.)',
'Viet Nam' => 'Viet Nam',
'Vanuatu' => 'Vanuatu',
'Wallis And Futuna Islands' => 'Wallis And Futuna Islands',
'Samoa' => 'Samoa',
'Yemen' => 'Yemen',
'Mayotte' => 'Mayotte',
'South Africa' => 'South Africa',
'Zambia' => 'Zambia',
'Zimbabwe' => 'Zimbabwe'
), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Roles To be Considered For  *') !!}
    {!! Form::text('role', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'role to be considered for')) !!}
</div>

<div class="form-group">
    {!! Form::label('Current Employer  *') !!}
    {!! Form::text('employer', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'current employer')) !!}
</div>


<div class="form-group">
    {!! Form::label('Years of Relevant Experience  *') !!}
    {!! Form::text('years', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Years of relevant experience')) !!}
</div>

<div class="form-group">
    {!! Form::label('Education  *') !!}
    {!! Form::select('education', ['secondary sch' => 'Secondary School', 'BSc' => 'Bachelors Degree','Masters' => 'Masters Degree','PHd' => 'PHD/Fellowship'], null, ['placeholder' => 'Pick a qualification..']) !!}
</div>
<div class="form-group">
    {!! Form::label('Current Net Salary (Naira/Dollar)  *') !!}
    {!! Form::text('salary', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Current Net Salary (Naira/Dollar)')) !!}
</div>

<div class="form-group">
    {!! Form::label('Resume/Cv   *') !!}
    {!!  Form::file('resume')!!}
</div>


<div class="form-group">
    {!! Form::submit('Submit', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
      </sect
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
	   $message        .= "Highest Level of Education: ". filter_var($_POST["level"], FILTER_SANITIZE_STRING)."\n"; //message
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