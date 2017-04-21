<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	
	// select loggedin users detail
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Flowers</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css"/>
	<link rel="stylesheet" href="css/nivo-slider-default.css" type="text/css"/>
	<link rel="stylesheet" href="css/mediaBoxes.css" type="text/css"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Cedarville+Cursive|Dancing+Script|Indie+Flower|Monda|Prata|Roboto|Source+Sans+Pro|Work+Sans" rel="stylesheet"> 	
	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="js/rotate-patch.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/mediaBoxes.min.js"></script>
	<script type="text/javascript" src="js/instafeed.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>


	<audio autoplay="false" loop width="0" height="0" id="sound" src="Music.mp3" type="audio/mp3" ></audio>
	<audio autoplay="false" loop width="0" height="0" id="sympathy_sound" src="Sympathy.mp3" type="audio/mp3" ></audio>


	<div class="container">

	  <!-- Static navbar -->
	  <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid no-gutter">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="Kemah Flowers and Company" title="Kemah Flowers and Company"/></a>
            
		  </div>
          
		  <div id="navbar" class="navbar-collapse collapse">
			<div class="share">
				<a href="https://www.facebook.com/kemahflowersandcompany" target="_blank"><img src="images/facebook-logo.png" alt="Facebook" title="Facebook"/></a>
				<a href="https://twitter.com/Kemahflowers1" target="_blank"><img src="images/twitter-logo.png" alt="Twitter" title="Twitter"/></a>
				<a href="https://www.instagram.com/kemahflowersandcompany/" target="_blank"><img src="images/instagram-logo.png" alt="Instagram" title="Instagram"/></a>
				<a href="tel:+12015326933" class="phno">201-532-6933</a>
			</div>
            <div class="row">
            	
                <div class="col-md-6 pull-right" style="margin-top: -25px;">
                	<ul class="cheri">
						<?php if (isset($_SESSION['au_session_login'])) { ?>
                        <li><a href="admin/logout.php">Log Out</a></li>
                        <li><p class="navbar-text">Signed in as <?php echo $_SESSION['au_session_login_username']; ?></p></li>
                         <li><a href="admin/index.php"> Schedule</a></li>
                        <?php } else { ?>
                         <li><a href="admin/login.php#signup-box">Sign Up</a></li>
                        <li><a href="admin/login.php">Login</a></li>
                       
                    <?php } ?>
					</ul>
                </div>
                <div class="col-md-4 pull-left" style="margin-top: -25px; margin-left: 30px; font-size: 20px;">
                	<div class=""><p>WEDDINGS & EVENTS</p></div>
                </div>
            </div>
            
         
			
            
			<ul class="nav navbar-nav">
			  <li><a href="#home" class="home">Home</a></li>
			  <li><a href="#wedding" class="wedding">Wedding</a></li>
			  <li><a href="#sympathy" class="sympathy">Sympathy</a></li>
			  <li><a href="#others" class="others">Other Services</a></li>
			  <li><a href="#gallery" class="gallery">Gallery</a></li>
			  <li><a href="#testimonials" class="testimonials">Testimonials</a></li>
			  <li><a href="#contact" class="contact">Contact Us</a></li>
			  <li><a href="#about" class="about">About Us</a></li>
             
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Florist <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#florist" class="florist"  style="background: rgb(0, 128, 0) none repeat scroll 0% 0% ! important;">Send Flowers to manager</a></li>
                
              </ul>
             </li>
            
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event Planner <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#plan" class="plan" style="background: rgb(0, 128, 0) none repeat scroll 0% 0% ! important;">Plan an event</a></li>
                
              </ul>
             </li>
           
			</ul>
		  </div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	  </nav>
	  
	  <div class="main-container">
	  
		<!--Home Container-->
		<div id="home" class="home nav-container">
			<a href="#contact" class="get-a-quote">GET A QUOTE >></a>
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="images/home/home-1.jpg" data-thumb="images/home/home-1.jpg" alt="" />
					<img src="images/home/home-2.jpg" data-thumb="images/home/home-2.jpg" alt=""/>
					<img src="images/home/home-3.jpg" data-thumb="images/home/home-3.jpg" alt=""/>
					<img src="images/home/home-4.jpg" data-thumb="images/home/home-4.jpg" alt=""/>
					<img src="images/home/home-5.jpg" data-thumb="images/home/home-5.jpg" alt=""/>
					<img src="images/home/home-6.jpg" data-thumb="images/home/home-6.jpg" alt=""/>
				</div>			
			</div>
			<div class="col-xs-12 home-gallery" id="instafeed">
			</div>			
			<div class="col-xs-12">
				<p><strong>Welcome to our shop’s website</strong> - conveniently open 24 hours a day!! We hope you enjoy your online experience with secure, e-commerce ordering right at your fingertips. If desired, you may also call us to place orders direct at 281-839-5266.</p>
				<p><strong>Wedding Flowers & Special Event Flowers</strong> - Specializing in event planning and designing, we have been chosen to design for large venues and events, like the American Cancer Society Starlight Gala. With Kemah Flowers and Company creating the bouquets and arrangements, your wedding or special event is sure to be a “blooming success!” Call us in advance at 281-839-5266 and schedule a consultation with one of our talented floral experts</p>
			</div>
		</div>
		
		<!--Wedding Container-->
		<div id="wedding" class="wedding nav-container row">
			<div class="slider-wrapper theme-default">
				<div id="slider1" class="nivoSlider">
					<img src="images/wedding/wedding-1.jpg" data-thumb="images/wedding/wedding-1.jpg" alt="" title="Flowers are the music of the ground from earths lips spoken without sound" />
					<img src="images/wedding/wedding-2.jpg" data-thumb="images/wedding/wedding-2.jpg" alt="" title="Keep love in your heart" />
					<img src="images/wedding/wedding-3.jpg" data-thumb="images/wedding/wedding-3.jpg" alt="" title="May your love bloom forever" />
					<img src="images/wedding/wedding-4.jpg" data-thumb="images/wedding/wedding-4.jpg" alt="" title="He asked…and she said YES!" />
					<img src="images/wedding/wedding-5.jpg" data-thumb="images/wedding/wedding-5.jpg" alt="" title="Earth laughs in flowers" />
					<img src="images/wedding/wedding-6.jpg" data-thumb="images/wedding/wedding-6.jpg" alt="" title="Here is a dream-life, A life amongst the flowers" />
				</div>			
			</div>
			<div class="col-xs-12">
				<div class="content grid-container">
				<!--  ================== MEDIA BOXES ================== -->
					<div id="grid2">
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/1.jpg"></div><div data-image="images/wedding/bridal-bouquets/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/1.jpg"></div><div data-image="images/wedding/centerpieces/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/1.jpg"></div><div data-image="images/wedding/cake-toppers/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/1.jpg"></div><div data-image="images/wedding/boutonnieres/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/2.jpg"></div><div data-image="images/wedding/bridal-bouquets/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/2.jpg"></div><div data-image="images/wedding/centerpieces/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/2.jpg"></div><div data-image="images/wedding/cake-toppers/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/2.jpg"></div><div data-image="images/wedding/boutonnieres/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/3.jpg"></div><div data-image="images/wedding/bridal-bouquets/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/3.jpg"></div><div data-image="images/wedding/centerpieces/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/3.jpg"></div><div data-image="images/wedding/cake-toppers/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/3.jpg"></div><div data-image="images/wedding/boutonnieres/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/4.jpg"></div><div data-image="images/wedding/bridal-bouquets/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/4.jpg"></div><div data-image="images/wedding/centerpieces/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/4.jpg"></div><div data-image="images/wedding/cake-toppers/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/4.jpg"></div><div data-image="images/wedding/boutonnieres/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>


						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/5.jpg"></div><div data-image="images/wedding/bridal-bouquets/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/6.jpg"></div><div data-image="images/wedding/bridal-bouquets/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/7.jpg"></div><div data-image="images/wedding/bridal-bouquets/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/8.jpg"></div><div data-image="images/wedding/bridal-bouquets/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/9.jpg"></div><div data-image="images/wedding/bridal-bouquets/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/10.jpg"></div><div data-image="images/wedding/bridal-bouquets/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/11.jpg"></div><div data-image="images/wedding/bridal-bouquets/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/12.jpg"></div><div data-image="images/wedding/bridal-bouquets/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/13.jpg"></div><div data-image="images/wedding/bridal-bouquets/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/14.jpg"></div><div data-image="images/wedding/bridal-bouquets/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/15.jpg"></div><div data-image="images/wedding/bridal-bouquets/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/16.jpg"></div><div data-image="images/wedding/bridal-bouquets/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/17.jpg"></div><div data-image="images/wedding/bridal-bouquets/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/18.jpg"></div><div data-image="images/wedding/bridal-bouquets/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/19.jpg"></div><div data-image="images/wedding/bridal-bouquets/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Bridal Bouquet" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/bridal-bouquets/20.jpg"></div><div data-image="images/wedding/bridal-bouquets/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/5.jpg"></div><div data-image="images/wedding/centerpieces/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/6.jpg"></div><div data-image="images/wedding/centerpieces/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/7.jpg"></div><div data-image="images/wedding/centerpieces/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/8.jpg"></div><div data-image="images/wedding/centerpieces/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/9.jpg"></div><div data-image="images/wedding/centerpieces/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/10.jpg"></div><div data-image="images/wedding/centerpieces/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/11.jpg"></div><div data-image="images/wedding/centerpieces/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/12.jpg"></div><div data-image="images/wedding/centerpieces/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/13.jpg"></div><div data-image="images/wedding/centerpieces/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/14.jpg"></div><div data-image="images/wedding/centerpieces/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/15.jpg"></div><div data-image="images/wedding/centerpieces/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/16.jpg"></div><div data-image="images/wedding/centerpieces/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/17.jpg"></div><div data-image="images/wedding/centerpieces/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/18.jpg"></div><div data-image="images/wedding/centerpieces/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/19.jpg"></div><div data-image="images/wedding/centerpieces/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/20.jpg"></div><div data-image="images/wedding/centerpieces/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/21.jpg"></div><div data-image="images/wedding/centerpieces/21.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Centerpieces" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/centerpieces/22.jpg"></div><div data-image="images/wedding/centerpieces/22.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
						
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/5.jpg"></div><div data-image="images/wedding/cake-toppers/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/6.jpg"></div><div data-image="images/wedding/cake-toppers/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/7.jpg"></div><div data-image="images/wedding/cake-toppers/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/8.jpg"></div><div data-image="images/wedding/cake-toppers/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/9.jpg"></div><div data-image="images/wedding/cake-toppers/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/10.jpg"></div><div data-image="images/wedding/cake-toppers/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/11.jpg"></div><div data-image="images/wedding/cake-toppers/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/12.jpg"></div><div data-image="images/wedding/cake-toppers/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/13.jpg"></div><div data-image="images/wedding/cake-toppers/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/14.jpg"></div><div data-image="images/wedding/cake-toppers/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/15.jpg"></div><div data-image="images/wedding/cake-toppers/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cake Toppers" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/cake-toppers/16.jpg"></div><div data-image="images/wedding/cake-toppers/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
						
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/5.jpg"></div><div data-image="images/wedding/boutonnieres/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/6.jpg"></div><div data-image="images/wedding/boutonnieres/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/7.jpg"></div><div data-image="images/wedding/boutonnieres/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/8.jpg"></div><div data-image="images/wedding/boutonnieres/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/9.jpg"></div><div data-image="images/wedding/boutonnieres/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/10.jpg"></div><div data-image="images/wedding/boutonnieres/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/11.jpg"></div><div data-image="images/wedding/boutonnieres/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/12.jpg"></div><div data-image="images/wedding/boutonnieres/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/13.jpg"></div><div data-image="images/wedding/boutonnieres/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/14.jpg"></div><div data-image="images/wedding/boutonnieres/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/15.jpg"></div><div data-image="images/wedding/boutonnieres/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/16.jpg"></div><div data-image="images/wedding/boutonnieres/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/17.jpg"></div><div data-image="images/wedding/boutonnieres/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/18.jpg"></div><div data-image="images/wedding/boutonnieres/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/19.jpg"></div><div data-image="images/wedding/boutonnieres/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/20.jpg"></div><div data-image="images/wedding/boutonnieres/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/21.jpg"></div><div data-image="images/wedding/boutonnieres/21.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/22.jpg"></div><div data-image="images/wedding/boutonnieres/22.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/23.jpg"></div><div data-image="images/wedding/boutonnieres/23.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/24.jpg"></div><div data-image="images/wedding/boutonnieres/24.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/25.jpg"></div><div data-image="images/wedding/boutonnieres/25.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Boutonnieres" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/boutonnieres/26.jpg"></div><div data-image="images/wedding/boutonnieres/26.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
					</div>
				</div>
			</div>	
		</div>
		
		<!--Sympathy Container-->
		<div id="sympathy" class="sympathy nav-container row">
			<div class="col-xs-12">
				<h2>With love and remembrance</h2>
				<div class="content grid-container">
				<!--  ================== MEDIA BOXES ================== -->
					<div id="grid3">
					
					
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/1.jpg"></div><div data-image="images/sympathy/service/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/1.jpg"></div><div data-image="images/sympathy/cremation/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/1.jpg"></div><div data-image="images/sympathy/wreaths/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/2.jpg"></div><div data-image="images/sympathy/service/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/2.jpg"></div><div data-image="images/sympathy/cremation/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/2.jpg"></div><div data-image="images/sympathy/wreaths/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/3.jpg"></div><div data-image="images/sympathy/service/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/3.jpg"></div><div data-image="images/sympathy/cremation/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/3.jpg"></div><div data-image="images/sympathy/wreaths/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/4.jpg"></div><div data-image="images/sympathy/service/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/4.jpg"></div><div data-image="images/sympathy/cremation/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/4.jpg"></div><div data-image="images/sympathy/wreaths/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>


						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/5.jpg"></div><div data-image="images/sympathy/service/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/6.jpg"></div><div data-image="images/sympathy/service/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/7.jpg"></div><div data-image="images/sympathy/service/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/8.jpg"></div><div data-image="images/sympathy/service/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/9.jpg"></div><div data-image="images/sympathy/service/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/10.jpg"></div><div data-image="images/sympathy/service/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/11.jpg"></div><div data-image="images/sympathy/service/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/12.jpg"></div><div data-image="images/sympathy/service/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/13.jpg"></div><div data-image="images/sympathy/service/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/14.jpg"></div><div data-image="images/sympathy/service/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/15.jpg"></div><div data-image="images/sympathy/service/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/16.jpg"></div><div data-image="images/sympathy/service/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/17.jpg"></div><div data-image="images/sympathy/service/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/18.jpg"></div><div data-image="images/sympathy/service/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/19.jpg"></div><div data-image="images/sympathy/service/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/20.jpg"></div><div data-image="images/sympathy/service/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/21.jpg"></div><div data-image="images/sympathy/service/21.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/22.jpg"></div><div data-image="images/sympathy/service/22.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/23.jpg"></div><div data-image="images/sympathy/service/23.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/24.jpg"></div><div data-image="images/sympathy/service/24.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/25.jpg"></div><div data-image="images/sympathy/service/25.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/26.jpg"></div><div data-image="images/sympathy/service/26.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="For The Service" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/service/27.jpg"></div><div data-image="images/sympathy/service/27.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
						
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/5.jpg"></div><div data-image="images/sympathy/cremation/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/6.jpg"></div><div data-image="images/sympathy/cremation/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/7.jpg"></div><div data-image="images/sympathy/cremation/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/8.jpg"></div><div data-image="images/sympathy/cremation/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/9.jpg"></div><div data-image="images/sympathy/cremation/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/10.jpg"></div><div data-image="images/sympathy/cremation/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/11.jpg"></div><div data-image="images/sympathy/cremation/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/12.jpg"></div><div data-image="images/sympathy/cremation/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/13.jpg"></div><div data-image="images/sympathy/cremation/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/14.jpg"></div><div data-image="images/sympathy/cremation/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/15.jpg"></div><div data-image="images/sympathy/cremation/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/16.jpg"></div><div data-image="images/sympathy/cremation/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/17.jpg"></div><div data-image="images/sympathy/cremation/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/18.jpg"></div><div data-image="images/sympathy/cremation/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Cremation" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/cremation/19.jpg"></div><div data-image="images/sympathy/cremation/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
						
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/5.jpg"></div><div data-image="images/sympathy/wreaths/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/6.jpg"></div><div data-image="images/sympathy/wreaths/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/7.jpg"></div><div data-image="images/sympathy/wreaths/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/8.jpg"></div><div data-image="images/sympathy/wreaths/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/9.jpg"></div><div data-image="images/sympathy/wreaths/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/10.jpg"></div><div data-image="images/sympathy/wreaths/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/11.jpg"></div><div data-image="images/sympathy/wreaths/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/12.jpg"></div><div data-image="images/sympathy/wreaths/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/13.jpg"></div><div data-image="images/sympathy/wreaths/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/14.jpg"></div><div data-image="images/sympathy/wreaths/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/15.jpg"></div><div data-image="images/sympathy/wreaths/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/16.jpg"></div><div data-image="images/sympathy/wreaths/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wreaths" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/wreaths/17.jpg"></div><div data-image="images/sympathy/wreaths/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
						
						

					</div>
				</div>
			</div>	
		</div>
		
		<!--Other Services Container-->
		<div id="others" class="others nav-container row">
			<div class="others-gallery">
				<div class="col-sm-4">
					<div id="grid4">
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/1.jpg"></div><div data-image="images/others/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/1.jpg"></div><div data-image="images/others/birthday/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/2.jpg"></div><div data-image="images/others/birthday/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/3.jpg"></div><div data-image="images/others/birthday/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/4.jpg"></div><div data-image="images/others/birthday/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/5.jpg"></div><div data-image="images/others/birthday/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/6.jpg"></div><div data-image="images/others/birthday/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/7.jpg"></div><div data-image="images/others/birthday/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/8.jpg"></div><div data-image="images/others/birthday/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/9.jpg"></div><div data-image="images/others/birthday/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/10.jpg"></div><div data-image="images/others/birthday/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
					</div>
					<h3>Birthday</h3>
				</div>
				<div class="col-sm-4">
					<div id="grid5">
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/2.jpg"></div><div data-image="images/others/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/1.jpg"></div><div data-image="images/others/quincy/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/2.jpg"></div><div data-image="images/others/quincy/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/3.jpg"></div><div data-image="images/others/quincy/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/4.jpg"></div><div data-image="images/others/quincy/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/5.jpg"></div><div data-image="images/others/quincy/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/6.jpg"></div><div data-image="images/others/quincy/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/7.jpg"></div><div data-image="images/others/quincy/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/8.jpg"></div><div data-image="images/others/quincy/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
					</div>
					<h3>Quinceanera</h3>
				</div>
				<div class="col-sm-4">
					<div id="grid6">
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/3.jpg"></div><div data-image="images/others/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/1.jpg"></div><div data-image="images/others/valentines/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/2.jpg"></div><div data-image="images/others/valentines/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/3.jpg"></div><div data-image="images/others/valentines/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/4.jpg"></div><div data-image="images/others/valentines/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/5.jpg"></div><div data-image="images/others/valentines/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/6.jpg"></div><div data-image="images/others/valentines/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/7.jpg"></div><div data-image="images/others/valentines/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/8.jpg"></div><div data-image="images/others/valentines/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/9.jpg"></div><div data-image="images/others/valentines/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/10.jpg"></div><div data-image="images/others/valentines/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
					</div>
					<h3>Valentines</h3>
				</div>
				<div class="clear"></div>
			</div>
			<div class="others-content col-xs-12">
				<p>We specialize in the following:</p>
				<ul>
					<li>Fresh flower arrangements for all occasions</li>
					<li>Contemporary and traditional arrangements for all occasions</li>
					<li>High-style floral arrangements</li>
					<li>Large stock of tropical flowers such as orchids, ginger and anthurium</li>
					<li>Funeral and Sympathy designs</li>
					<li>Gourmet baskets, fruit baskets, wine baskets, and gift baskets</li>
					<li>Blooming Plants and Green Plants</li>
					<li>European Plant Baskets - Our Unique mix of green and blooming plants</li>
					<li>Dried floral arrangements, dried floral wreaths, and custom made dried flowers</li>
					<li>Weddings</li>
					<li>Greeting cards</li>
					<li>Candles</li>
					<li>Corporate Events</li>
					<li>Corporate Landscaping</li>
					<li>Holiday Decor</li>
					<li>Interior Landscaping - interior Plants Design and interior plant maintenance</li>
					<li>Weekly Flower Service</li>
				</ul>
				<p>Live on Coffee + flowers, visit us at <a href="https://www.facebook.com/ArtOfCoffee15/" target="_blank">Art Of Coffee</a></p>
			</div>
		</div>
		
		<!--Gallery Container-->
		<div id="gallery" class="gallery nav-container row">
			<div class="col-xs-12">
				<h2>Where flowers bloom, so does hope</h2>
				<div class="content grid-container">
				<!--  ================== MEDIA BOXES ================== -->
					<div id="grid">
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/1.jpg"></div><div data-image="images/wedding/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/1.jpg"></div><div data-image="images/sympathy/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/1.jpg"></div><div data-image="images/others/birthday/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/1.jpg"></div><div data-image="images/others/valentines/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/1.jpg"></div><div data-image="images/others/quincy/1.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/2.jpg"></div><div data-image="images/wedding/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/2.jpg"></div><div data-image="images/sympathy/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/2.jpg"></div><div data-image="images/others/birthday/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/2.jpg"></div><div data-image="images/others/valentines/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/2.jpg"></div><div data-image="images/others/quincy/2.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/3.jpg"></div><div data-image="images/wedding/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/3.jpg"></div><div data-image="images/sympathy/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/3.jpg"></div><div data-image="images/others/birthday/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/3.jpg"></div><div data-image="images/others/valentines/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/3.jpg"></div><div data-image="images/others/quincy/3.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/4.jpg"></div><div data-image="images/wedding/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/4.jpg"></div><div data-image="images/sympathy/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/4.jpg"></div><div data-image="images/others/birthday/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/4.jpg"></div><div data-image="images/others/valentines/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/4.jpg"></div><div data-image="images/others/quincy/4.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>


						<!--Wedding Images-->
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/5.jpg"></div><div data-image="images/wedding/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/6.jpg"></div><div data-image="images/wedding/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/7.jpg"></div><div data-image="images/wedding/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/8.jpg"></div><div data-image="images/wedding/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/9.jpg"></div><div data-image="images/wedding/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/10.jpg"></div><div data-image="images/wedding/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/11.jpg"></div><div data-image="images/wedding/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/12.jpg"></div><div data-image="images/wedding/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/13.jpg"></div><div data-image="images/wedding/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/14.jpg"></div><div data-image="images/wedding/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/15.jpg"></div><div data-image="images/wedding/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/16.jpg"></div><div data-image="images/wedding/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/17.jpg"></div><div data-image="images/wedding/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Wedding" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/wedding/18.jpg"></div><div data-image="images/wedding/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<!--Sympathy Images-->
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/5.jpg"></div><div data-image="images/sympathy/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/6.jpg"></div><div data-image="images/sympathy/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/7.jpg"></div><div data-image="images/sympathy/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/8.jpg"></div><div data-image="images/sympathy/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/9.jpg"></div><div data-image="images/sympathy/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/10.jpg"></div><div data-image="images/sympathy/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/11.jpg"></div><div data-image="images/sympathy/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/12.jpg"></div><div data-image="images/sympathy/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/13.jpg"></div><div data-image="images/sympathy/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/14.jpg"></div><div data-image="images/sympathy/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/15.jpg"></div><div data-image="images/sympathy/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/16.jpg"></div><div data-image="images/sympathy/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/17.jpg"></div><div data-image="images/sympathy/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/18.jpg"></div><div data-image="images/sympathy/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/19.jpg"></div><div data-image="images/sympathy/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Sympathy" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/sympathy/20.jpg"></div><div data-image="images/sympathy/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						
						<!--Birthday Images-->
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/5.jpg"></div><div data-image="images/others/birthday/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/6.jpg"></div><div data-image="images/others/birthday/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/7.jpg"></div><div data-image="images/others/birthday/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/8.jpg"></div><div data-image="images/others/birthday/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/9.jpg"></div><div data-image="images/others/birthday/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/10.jpg"></div><div data-image="images/others/birthday/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/11.jpg"></div><div data-image="images/others/birthday/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/12.jpg"></div><div data-image="images/others/birthday/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/13.jpg"></div><div data-image="images/others/birthday/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/14.jpg"></div><div data-image="images/others/birthday/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/15.jpg"></div><div data-image="images/others/birthday/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/16.jpg"></div><div data-image="images/others/birthday/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/17.jpg"></div><div data-image="images/others/birthday/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/18.jpg"></div><div data-image="images/others/birthday/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/19.jpg"></div><div data-image="images/others/birthday/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/20.jpg"></div><div data-image="images/others/birthday/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/21.jpg"></div><div data-image="images/others/birthday/21.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/22.jpg"></div><div data-image="images/others/birthday/22.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/23.jpg"></div><div data-image="images/others/birthday/23.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/24.jpg"></div><div data-image="images/others/birthday/24.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/25.jpg"></div><div data-image="images/others/birthday/25.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/26.jpg"></div><div data-image="images/others/birthday/26.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/27.jpg"></div><div data-image="images/others/birthday/27.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Birthday" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/birthday/28.jpg"></div><div data-image="images/others/birthday/28.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						
						<!--Valentines Day Images-->
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/5.jpg"></div><div data-image="images/others/valentines/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/6.jpg"></div><div data-image="images/others/valentines/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/7.jpg"></div><div data-image="images/others/valentines/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/8.jpg"></div><div data-image="images/others/valentines/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/9.jpg"></div><div data-image="images/others/valentines/9.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/10.jpg"></div><div data-image="images/others/valentines/10.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/11.jpg"></div><div data-image="images/others/valentines/11.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/12.jpg"></div><div data-image="images/others/valentines/12.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/13.jpg"></div><div data-image="images/others/valentines/13.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/14.jpg"></div><div data-image="images/others/valentines/14.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/15.jpg"></div><div data-image="images/others/valentines/15.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/16.jpg"></div><div data-image="images/others/valentines/16.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/17.jpg"></div><div data-image="images/others/valentines/17.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/18.jpg"></div><div data-image="images/others/valentines/18.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/19.jpg"></div><div data-image="images/others/valentines/19.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/20.jpg"></div><div data-image="images/others/valentines/20.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/21.jpg"></div><div data-image="images/others/valentines/21.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/22.jpg"></div><div data-image="images/others/valentines/22.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/23.jpg"></div><div data-image="images/others/valentines/23.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/24.jpg"></div><div data-image="images/others/valentines/24.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/25.jpg"></div><div data-image="images/others/valentines/25.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/26.jpg"></div><div data-image="images/others/valentines/26.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/27.jpg"></div><div data-image="images/others/valentines/27.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/28.jpg"></div><div data-image="images/others/valentines/28.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/29.jpg"></div><div data-image="images/others/valentines/29.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Valentines Day" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/valentines/30.jpg"></div><div data-image="images/others/valentines/30.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

						<!--Quincy Images-->
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/5.jpg"></div><div data-image="images/others/quincy/5.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/6.jpg"></div><div data-image="images/others/quincy/6.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/7.jpg"></div><div data-image="images/others/quincy/7.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>
						<div class="box" data-category="Quinceanera" data-others="-classic-"><div class="box-image"><div data-thumbnail="images/others/quincy/8.jpg"></div><div data-image="images/others/quincy/8.jpg" ></div><div class="thumbnail-caption"><div class="hover-lightbox open-lightbox"></div><a href="#" target="_blank"><div class="hover-url"></div></a></div><div class="lightbox-text">Kemah Flowers and Company</span></div></div></div>

					</div>
				</div>
			</div>	
		</div>


		<!--Testimonials Container-->
		<div id="testimonials" class="testimonials nav-container row">
			<div class="slider-wrapper theme-default">
				<img class="img0" src="images/testimonials/slide-1.jpg" data-thumb="images/testimonials/slide-1.jpg" alt="" />
				<img class="img1" src="images/testimonials/slide-2.jpg" data-thumb="images/testimonials/slide-2.jpg" alt="" />
				<img class="img2" src="images/testimonials/slide-3.jpg" data-thumb="images/testimonials/slide-3.jpg" alt="" />
				<img class="img3" src="images/testimonials/slide-4.jpg" data-thumb="images/testimonials/slide-4.jpg" alt="" />
			</div>
			<div class="testimonial-images">
				<div class="col-xs-6 col-sm-3"><a href="#"><img class="img-thumbnail" src="images/testimonials/1.jpg" alt="Kemah Flowers and Company" title="Kemah Flowers and Company"/></a></div>
				<div class="col-xs-6 col-sm-3"><a href="#"><img class="img-thumbnail" src="images/testimonials/2.jpg" alt="Kemah Flowers and Company" title="Kemah Flowers and Company"/></a></div>
				<div class="col-xs-6 col-sm-3"><a href="#"><img class="img-thumbnail" src="images/testimonials/3.jpg" alt="Kemah Flowers and Company" title="Kemah Flowers and Company"/></a></div>
				<div class="col-xs-6 col-sm-3"><a href="#"><img class="img-thumbnail" src="images/testimonials/4.jpg" alt="Kemah Flowers and Company" title="Kemah Flowers and Company"/></a></div>
			</div>	
		</div>

		<!--Contact Us Container-->
		<div id="contact" class="contact nav-container row">
			<div class="left-container-image col-xs-12 col-sm-6">
				<h2>Contact Us</h2>
				<p>609 Bradford Ave.Ste 107 Kemah, TX 77565</p>
				<p>Tel: (201) 532-6933</p>
				<form method="post" class="form-horizontal" role="form" action="form-to-email.php">
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<input type="text" id="firstName" class="form-control" name="firstName">
						</div>
					</div>
					<div class="form-group">
						<label for="phoneNumber" class="col-sm-3 control-label">Phone Number</label>
						<div class="col-sm-9">
							<input type="text" id="phoneNumer" class="form-control" name="phoneNumber">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<input type="email" id="email" class="form-control" name="email">
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-3 control-label">Subject</label>
						<div class="col-sm-9">
						<select class="form-control" name="subject">
    <option value="Select">Select</option>
    <option value="Wedding">Wedding</option>
    <option value="Birthday">Birthday</option>
    <option value="Valentines">Valentines Day</option>
    <option value="Quinceanera">Quinceanera</option>
	<option value="Funeral">Funeral</option>
	<option value="Other">Other</option>
</select>
							
							
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-3 control-label">Message</label>
						<div class="col-sm-9">
							<input type="textarea" id="message" class="form-control" name="message">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3 col-sm-offset-9">
							<input type="submit" class="btn btn-primary btn-block pull-right" name ="submit" value="submit">
						</div>
					</div>
				</form>
			</div>
			<div class="right-container-image col-xs-12 col-sm-6">
				<!--Google Maps-->
				<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=609%20Bradford%20Ave.Ste%20107%20Kemah%2C%20TX%2077565+(Kemah%20Flowers%20and%20Company)&key=AIzaSyCcIZAsCiIVcTZjnJMbxVrnIof6_tBj-xY" allowfullscreen></iframe>
			</div>
		</div>
		
		<!--About Us Container-->
		<div id="about" class="about nav-container row">
		
			<div class="container">
				<h2>About Us</h2>
				<p class="about-us">Kemah Flowers and Company is a local flower shop in Kemah, Texas florist with 21 years of floral  experience. Our shop specializes in delivering courteous and professional service, along with the highest quality floral and gift items around.</p>
				<div class="about-container col-xs-12 col-sm-3">
					<img src="images/about/1.png" alt="Jimmy Sims" title="Jimmy Sims"/>
					<h3>Jimmy Sims</h3>
					<div class="about-content">
						<p>Owner at Kemah Flowers and Company</p>
					</div>
				</div>
				<div class="about-container col-xs-12 col-sm-3">
					<img src="images/about/2.png" alt="Buddy" title="Buddy"/>
					<h3>Buddy</h3>
					<div class="about-content">
						<p>Co-Worker and Door Greeter</p>
					</div>
				</div>
				<div class="about-container col-xs-12 col-sm-3">
					<img src="images/about/3.png" alt="Damon Baker" title="Damon Baker"/>
					<h3>Damon Baker</h3>
					<div class="about-content">
						<p>18 Year Floral Designer</p>
						<p>Two Time Designer Cup Winner</p>
					</div>
				</div>
				<div class="about-container col-xs-12 col-sm-3">
					<img src="images/about/4.png" alt="Laikin" title="Laikin"/>
					<h3>Laikin 6 months old</h3>
					<div class="about-content">
						<p>Future CEO and Floral Designer<p>
					</div>
				</div>
			</div>
		
		</div>
		
	  </div>
 <!-----Plan an event------>
      	<div id="plan" class="plan nav-container">
        	<div class="plan">
            
        	<h1>--Not implemented yet--</h1>
            </div>
        </div>
      <!--plan an event end------>
      
      <!---florist------->
   
      	<div id="florist" class="florist nav-container">
        	<div class="florist">
            
        	<h1>--Flowers sent to Manager--</h1>
            </div>
        </div>
      
      
      <!----florist end----->
	  
	  <footer>
		<p>If you already have an idea, then what are you waiting for?</p>
		<p>Get started right away talk with us <a href="#" class="appointment">Schedule an Appointment</a></p>
		<p style="text-align:left;font-size:18px;color:#008000">&copy; 2016. kemahflowersandcompany</p>
		<p class="students">Done by UHCL students<img src="images/UHCL-logo.jpg" alt="UHCL logo" title="UHCL logo"/></p>
		<div class="clear"></div>
	  </footer>	  
	  
	</div>
<script type="text/javascript">
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
	
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>	
	<script type="text/javascript">
	var feed = new Instafeed({
		get: 'user',
		userId: '3138796725',
		tagName: 'kemahflowersandcompany',
		clientId: '0522f717dfd344e58ea8ed5d251c0797',
		accessToken: '3138796725.5b9e1e6.18fc8ab6895f40a59b91db02a1e85260',
		resolution: 'low_resolution',
		limit: '3',
		template: '<div class="col-sm-4"><a href="{{link}}" target="_blank"><img src="{{image}}" width="100%"/></a></div>'
	});
	feed.run();

</script>
</body>
</html>