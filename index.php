

<?php
if ($_SERVER['SERVER_NAME'] !== 'localhost') {
 
    $server ="sql101.infinityfree.com";
	$username ="if0_36131522";
	$password ="IAMbcc8i";
	$dbname ="if0_36131522_auspicious";

	$conn  =  mysql_connect($server. $username, $password, $dbname);

	if(!$conn){
		die("Connection Failed:".mysqli_connect_error());
	}
}	
?>
*/

-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Home :: auspicious</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.html"><i class="fa fa-leanpub" aria-hidden="true"></i> SPCFI</a></h1>

			</div>
			<div class="w3layouts_header_right">
			    <form action="#" method="post">
					<input name="Search here" type="search" placeholder="Search" required="">
					<input type="submit" value="">
				</form>
			</div>
			<ul class="agile_forms">
				<li><a class="active" href="students/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
			<!--	<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li> -->
			</ul>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About Us</a></li>
						<li><a href="#services" class="effect-3 scroll">Bulletin Board</a></li>
						<li><a href="#team" class="effect-3 scroll">Team</a></li>
						<li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
						<li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
<!-- banner -->
<div class="about-bottom">
	<div class="col-md-6 w3l_about_bottom_left">
		<div class="video-grid-single-page-agileits">
			<div data-video="E91gAjunqOM" id="video"> <img src="images/banner2.jpg" alt="" class="img-responsive" /> </div>
		</div>
		<div class="w3l_about_bottom_left_video">
			<h4>watch our video</h4>
		</div>
	</div>
	<div class="col-md-6 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2>Admission Form</h2>
				<h4>Enter the Following Details</h4>
				<form action="#" method="post" class="mod2">
					<div class="col-md-6 col-xs-6 w3l-left-mk">
						<ul>
							<li class="text">Name of Applicant :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="name" type="text" required=""></li>
							<li class="text">Date of Birth :  </li>
							<li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input class="date" id="datepicker" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" /></li>
							<li class="text">Father Name  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="name" type="text" required=""></li>
							<li class="text">Gender  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="gender" type="text" required=""></li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-6 w3l-right-mk">
						<ul>
							<li class="text">mobile no  :  </li>
							<li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i><input name="mobile" type="text" required=""></li>
							<li class="text">Address  :  </li>
							<li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input name="address" type="text" required=""></li>
							<li class="text">District  :  </li>
							<li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input name="address" type="text" required=""></li>
							<li class="text">State  :  </li>
							<li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input name="address" type="text" required=""></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="agile-submit">
						<input type="submit" value="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- Modal1 
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign In</h3>	
					<div class="login-form">
						<form  method="post">
							<input type="text" name="st_username" placeholder="Enter Your Username" required="">
							<input type="password" name="st_password" placeholder="Password" >
							<div class="tp">
								<input type="submit" value="Sign In" name="student_signin">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>
				
			</div>
		</div>
	</div>
</div>
//Modal1 -->	
	
	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			<!--
				<div class="signin-form profile">
					<h3 class="agileinfo_sigrname" placeholder="Username" required="">
							<input type="email" name="emn">Sign Up</h3>	
					<div class="login-form">
						<form method="post" >
						   <input type="text" name="useail" placeholder="Email" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<select class="form-control" name="grade" required="">
							
								<option class="select_grade">
								Select Class
								</option>
							
								
								
							</select>
							<input type="submit" value="Sign Up" name="student_signup">
						</form>
					</div>
					<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
				</div>
				-->
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal2 -->	
<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">About Us</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>
        <div class="col-md-7 wthree-services-bottom-grids">
            <div class="wthree-services-left">
                <img src="images/ab1.jpg" alt="">
            </div>
            <div class="wthree-services-right">
                <img src="images/spcfi.jpg" alt="" style="width: 100%; max-width: 450px; height: auto;">
            </div>

            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 wthree-about-grids">
            <h4>Welcome</h4>
            <a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
            <!-- Direct link to Facebook -->
            <a href="https://www.facebook.com/spcfpaniqui" target="_blank" class="trend-w3l"><span>Visit Us on Facebook</span></a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>


<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body">
				<img src="images/g10.jpg" alt=""> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
			</div> 
		</div>
	</div>
</div>
<!-- //modal --> 
<!-- //about -->

<!-- services -->
<div class="Bulletin Board" id="services" >
	<div class="container">  
		<h3 class="w3l-title">Announcement</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="services-w3ls-row">
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h6>01</h6>
				<h5>Unifast</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>02</h6>
				<h5>Enrolment</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				<span class="fa fa-user-o grid-w3l-ser" aria-hidden="true"></span>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-book" aria-hidden="true"></span>
				<h6>03</h6>
				<h5>New Courses Offered</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div> 
			<div class="clearfix"> </div>
		</div>  
	</div>
</div>
<!-- //services -->

<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		<h3 class="w3l-title">Our Gallery</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>sSPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SPCFI</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
<!-- team -->
<div class="team-w3l" id="team">
	<div class="container">
		<h3 class="w3l-title">Our Skilled Lecturers</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="team-w3l-grid">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/t1.jpg" alt="">
				  <h5>Victoria</h5>
				  <div class="about_opa">
					
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/t2.jpg" alt="">
				  <h5>Darponia</h5>
				  <div class="about_opa">
					<p>Senior Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/t3.jpg" alt="">
				  <h5>Kylie</h5>
				  <div class="about_opa">
					<p>Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="team-w3l-grid grid-2-team">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/t4.jpg" alt="">
				  <h5>Cameron</h5>
				  <div class="about_opa">
					<p>Professor</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/t5.jpg" alt="">
				  <h5>Darponia</h5>
				  <div class="about_opa">
					<p>Senior Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/t6.jpg" alt="">
				  <h5>Austin</h5>
				  <div class="about_opa">
					<p>Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->
<!-- contact -->
	<?php
	 include "setting/config.php";
	$general = $ravi->general_setting_check();
	
	$general_fetch = $general->fetch_assoc();
	$general_numss = $general->num_rows;
	if($general_numss>0)
	{
	?>
<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Mail Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Address</h4>
					<p><?php echo $general_fetch['website_address']; ?></p>
					<p>Nepal</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right">
					<h4>Phone</h4>
					<p><?php echo $general_fetch['website_phone1']; ?> <span><?php echo $general_fetch['website_phone2']; ?></span></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right1">
					<h4>Email</h4>
					<p><a href="mailto:info@example.com"><?php echo $general_fetch['website_email1']; ?></a>
						<span><a href="mailto:info@example.com"><?php echo $general_fetch['website_email2']; ?></a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3l-form">
			<h3 class="w3l-title">Get In Touch</h3>
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Name*</label>
							<input type="text" name="Name" placeholder="Name" required="">
							<label>E-mail*</label>
							<input type="email" name="E-mail" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Phone Number*</label>
							<input type="text" name="number" placeholder="Phone Number" required="">
							<label>Subject*</label>
							<input type="text" name="subject" placeholder="Subject" required="">
						</div>
						<div class="form-group">
							<label>Message*</label>
							<textarea placeholder name="Message" required=""></textarea>
						</div>
							<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="map"></div>
<!-- footer -->

			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

	<?php } else{ ?>

	<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Mail Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Address</h4>
					<p><?php echo "Enter Your Business Address"; ?></p>
					<p></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right">
					<h4>Phone</h4>
					<p><?php echo "Enter Your Business Email"; ?> <span><?php echo "Phone"; ?></span></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right1">
					<h4>Email</h4>
					<p><a href="mailto:info@example.com"><?php echo "Business Email"; ?></a>
						<span><a href="mailto:info@example.com"><?php echo "Email 2"; ?></a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3l-form">
			<h3 class="w3l-title">Get In Touch</h3>
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Name*</label>
							<input type="text" name="Name" placeholder="Name" required="">
							<label>E-mail*</label>
							<input type="email" name="E-mail" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Phone Number*</label>
							<input type="text" name="number" placeholder="Phone Number" required="">
							<label>Subject*</label>
							<input type="text" name="subject" placeholder="Subject" required="">
						</div>
						<div class="form-group">
							<label>Message*</label>
							<textarea placeholder name="Message" required=""></textarea>
						</div>
							<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="map"></div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="wthree_footer_grid_left">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>About Us</h4>
				<p><?php echo "Write About ur Business"; ?></p>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>Navigation</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">About Us</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#team" class="scroll">Team</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery" class="scroll">Gallery</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
				<h4>Others</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
				<h4>Contact Us</h4>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com"><?php echo $general_fetch['website_email1']; ?></a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo "Business Phone No"; ?></li>
					<li><i class="fa fa-fax" aria-hidden="true"></i><?php echo "Business Address"; ?></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

</div>
	<?php }?>
	<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->



<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>