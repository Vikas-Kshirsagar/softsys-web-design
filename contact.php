<?php
//if "email" variable is filled out, send email
  if (isset($_POST['submit'])) 
	  {
  
  //Email information
  $admin_email = "surendra.thawkar@gmail.com";
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
  
  //send email
  if(mail($admin_email, "$subject", $comment, "From:" . $email))
//  print_r(mail);exit;
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SoftSys</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="outline:0;"><img src="images/softsys1.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                      <li class="scroll "><a href="index.php" style="outline:0;">Home</a></li>
                        <li class="scroll"><a href="#features" style="outline:0; ">Features</a></li>
						<li class="scroll"><a href="#about" style="outline:0;">About</a></li>
                        <li class="scroll"><a href="#services" style="outline:0;">Services</a></li>
						<li class="scroll"><a href="contact.php" style="outline:0;">Contact</a></li>                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	
	
	
	
	
	   <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"></h1>
           
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
   
	<div class="container content">     
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <!-- Google Map -->
              <!-- <div id="google-map" style="height:650px" data-latitude="21.1074683" data-longitude="79.0706218"></div>-->
                <div class="google-map">
					<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25314.705189576223!2d-122.04163718289803!3d37.52352544242605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbee225b54b73%3A0xd9e9e38c14446fd!2sReal+Estate+Residential+Homes!5e0!3m2!1sen!2sin!4v1453458032800" ></iframe>-->
					<iframe style="width:100%; height:250px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3721.784049722241!2d79.053235!3d21.121174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c07788fd81c7%3A0xb94c0024fbb2b98b!2sShiwalkar+Complex+Garden+Police+Madat+Kendra!5e0!3m2!1sen!2sin!4v1413895766279"></iframe>
					</div>
				<!-- End Google Map -->

                <h3><b>Fill out the form and we will get back to you within 24 hours</b></h3><br />
                
                <form method="post" id="sky-form3" class="sky-form contact-style">
                    <fieldset class="no-padding">
                        <label>Name <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>                
                        </div>
                        
                        <label>Email <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>                
                        </div>
                        
						<label>Subject <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="subject" id="name" class="form-control">
                                </div>
                            </div>                
                        </div>
                        <label>Message <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>                
                        </div>
                        <br/>
                        <p><button type="submit" name="submit" class="btn-u">Send Message</button></p>
                    </fieldset>

                    
                </form>
            </div><!--/col-md-9-->
            
            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Register Office</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>Softsys Global Pvt Ltd.
																<br/> 49,Patil Layout, 3rd Bus Stop,
																<br/>gopal nagar,Nagpur-440022
																<br/>Maharashtra(India)</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@softsysglobal.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+91-712-2233282</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.softsysglobal.com</a></li>
                </ul>

                <!-- Business Hours -->
               <div class="headline"><h2>Corporate Office</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>Softsys Global Pvt Ltd.
																<br/>44 D-Wing, Shewalkar Garden, 
																<br/>South Ambazari Road, 
																<br/>Near Mate Chwok, In front of VNIT,  Nagpur-440015
																<br/>Maharashtra(India)</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+91-712-3021443 </a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>info@softsysglobal.com</a></li>
                </ul>

                <!-- Why we are? -->
                
            </div><!--/col-md-3-->
        </div><!--/row-->        
        </div><!--/row-->        

        <!-- Owl Clients v1 -->
        
    <!--=== End Content Part ===-->
	<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2008 softsys. Designed by <a target="_blank" href="http://softsys.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Softsys Global Pvt ltd</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	</body>
	</html>