<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>ANPFA</title>


	<!-- FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

	<!-- STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="home" data-spy="scroll" data-target=".politics-navbar">

	<!-- SITE HEADER -->
	<header class="site-header">
		<div class="top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 trending-topics hidden-sm hidden-xs">
						<ul class="list-inline">
							<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="icon ion-social-linkedin-outline"></i></a></li>
						</ul>
					</div> <!-- .col-md-6 ends -->
				</div> <!-- .row ends -->
			</div> <!-- .container-fluid ends -->
		</div> <!-- .top-bar ends -->
		<nav class="navbar navbar-default politics-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#politics-navbar-real" area-expanded="false">

						<span class="sr-only">Toggle Navigation</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>

					</button>

					<a class="navbar-brand" href="#">Politics</a>
				</div> <!-- .navbar-header ends -->
				<div class="collapse navbar-collapse" id="politics-navbar-real">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a data-scroll href="#">Home <span class="sr-only">(current)</span></a></li>
						<li><a data scroll href="#quick-links-block">About Us</a></li>
						<li><a  href="#our-members">Members</a></li>
						<li><a href="resource.php">Resource</a></li>
						
					</ul> <!-- .nav navbar-nav ends -->

					<ul class="nav navbar-nav navbar-right">
						<?php 
							include "admin/db.php";
			                $get_cat = "SELECT * FROM category";
			                $run_cat = mysqli_query($con, $get_cat);
			                while ($row_cat=mysqli_fetch_array($run_cat)) {
			                    $catId = $row_cat['id'];
			                    $eng_title = $row_cat['name_eng']; 
			                    $nep_title = $row_cat['name_nep'];
			                    $get_sub = "SELECT * FROM sub_category where category_id=".$catId;

			                $run_sub = mysqli_query($con, $get_sub);
			                $row_count = mysqli_num_rows($run_sub);
							if($row_count > 1)
							{
						?>
						 <li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $eng_title;?><span class="caret"></span></a>
							
							<ul class="dropdown-menu">
							<?php while ($row_sub = mysqli_fetch_array($run_sub)) {?>
								<li><a href="blog.php?cat=<?php echo $catId;?>&&sub=<?php echo $row_sub['id'];?>"><?php echo $row_sub['name_eng'];?></a></li>
							<?php } ?>
							</ul> </li><?php }
											else{ ?>
							<li><a href="blog.php?cat=<?php echo $catId;?>"><?php echo $eng_title;?></a></li>
						<?php } }?>
						
						<!-- <li><a  href="#featured-event">Events</a></li> -->
						<li><a href="contact.php">Contact</a></li>
						
					</ul> <!-- .nav navbar-nav ends -->
				</div> <!-- .collapse navbar-collapse ends -->
			</div> <!-- .container ends -->
		</nav> <!-- .navbar navbar-default ends -->
		
	</header> <!-- .site-header ends -->

	<!-- SLIDER -->

	<section class="politics-slider" id="politics-slider">
		<div class="carousel slide politics-carousel" id="politics-carousel" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="politics-carousel" data-slide-to="0" class="active"></li>
				<li data-target="politics-carousel" data-slide-to="1"></li>
			</ol> <!-- .carousel-indicators ends -->

			<div class="carousel-inner">
				<div class="item active">
					<img src="wall.js/ANPFA image/1.jpg" alt="carousel image">
					<div class="carousel-caption">
						<!-- <div class="caption-image">
							<img data-animation="animated fadeInRight" src="wall.js/ANPFA image/2.jpg" alt="caption image">
						</div> --> <!-- .caption-image ends -->
						<div class="caption-content">
							<h1><span data-animation="animated fadeInRight">All Nepal Peasants Fedration Association</span></h1>
							<p data-animation="animated fadeInUp">
								Quisque ut nisi. Sed fringilla et nibh. Ut varius tincidunt libero. Maecenas  he nunc fringilla tristique.
							</p>
						</div> <!-- .caption-content ends -->
						
					</div> <!-- .carousel-caption ends -->
				</div> <!-- .item active ends -->
				<div class="item">
					<img src="wall.js/ANPFA image/2.jpg" alt="carousel image">
					<div class="carousel-caption">
					
						<div class="caption-content">
							<h1><small data-animation="animated fadeInDown">A beautiful Day</small><!--  <span data-animation="animated fadeInDown">The Judgement day</span> --></h1>
							<p data-animation="animated fadeInUp">
								Quisque ut nisi. Sed fringilla et nibh. Ut varius tincidunt libero. Maecenas  he nunc fringilla toma dermajhe kikeu tomra kakebolo na amadero ase bondhuam manbona tobeb tristique.
							</p>
						</div> <!-- .caption-content ends -->
						
					</div> <!-- .carousel-caption ends -->
				</div> <!-- .item active ends -->
			</div> <!-- .carousel-inner ends -->

			<!-- CONTROLS -->
			<a class="left carousel-control" href="#politics-carousel" role="button" data-slide="prev">
				<span class="icon ion-ios-arrow-back" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a> <!-- .left carousel-control ends -->

			<a class="right carousel-control" href="#politics-carousel" role="button" data-slide="next">
				<span class="icon ion-ios-arrow-forward" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a> <!-- .right carousel-control ends -->

		</div> <!-- .carousel slide ends -->
	</section> <!-- .politics-slider ends -->

	<!-- INTRO SECTION -->

	<section class="intro-section section-block" id="intro-section">
		<div class="container">
			<div class="section-title-block">
				<h2>Welcome <span>to the world of Politics</span></h2>
				<div class="title-style">
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
				</div>
				<!-- <p>
					Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident.
				</p> -->
			</div> <!-- .section-title-block ends -->

			<div class="row section-content">
				<div class="col-lg-4">
					<div class="content-wrapper">
						<div class="icon-block"><i class="icon ion-ios-world-outline"></i></div>
						<h3><a href="#">Our Mandate</a></h3>
						<p>
							The president had a clear mandate to end the war. a command from a superior court or official to a lower one: The appellate court resolved the appeal and issued a mandate to the district judge
						</p>
					</div> <!-- .content-wrapper ends -->
				</div> <!-- col-lg-3 ends -->

				<div class="col-lg-4">
					<div class="content-wrapper">
						<div class="icon-block"><i class="icon ion-ios-chatboxes-outline"></i></div>
						<h3><a href="#">Election Campaign</a></h3>
						<p>
							Nolabore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud mmodo autit.
						</p>
					</div> <!-- .content-wrapper ends -->
				</div> <!-- col-lg-3 ends -->

				<div class="col-lg-4">
					<div class="content-wrapper">
						<div class="icon-block"><i class="icon ion-ios-personadd-outline"></i></div>
						<h3><a href="#">Get involved</a></h3>
						<p>
							Nolabore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud mmodo autit.
						</p>
					</div> <!-- .content-wrapper ends -->
				</div> <!-- col-lg-3 ends -->
			</div> <!-- .row section-content ends -->
		</div> <!-- .container ends -->
	</section> <!-- .intro-section ends -->


	<!-- LATEST NEWS -->

	<section class="latest-news section-block-2" id="latest-news">
		<div class="container">
			<div class="section-title-block-2">
				<h3>Whats New</h3>
				<p>
					Know about our activities more here.
				</p>
			</div> <!-- .section-title-block-2 ends -->

			<div class="row section-content">
				<div class="col-md-6 featured-news">
					<div class="news-wrapper">
						<img class="img-responsive" src="wall.js/ANPFA image/3.jpg" alt="latest news image">

						<div class="news-content">
							<a class="news-category" href="#">6th Conference</a>
							<div class="content-wrapper">
								<h4>America needs a real hero to work like me</h4>
								<p>
									Laboris nisi ut aliquip ex ea commodo
									consequaepteur sint occaecat cupidatat non
									proident, suntt anim id est laborum <a class="read-more-link" href="#">Continue</a>
								</p>
							</div> <!-- .content-wrapper ends -->
						</div> <!-- .news-content ends -->
					</div> <!-- .news-wrapper ends -->
				</div> <!-- .col-md-6 ends -->

				<div class="col-md-6 news-block">
					<div class="row">
						<div class="col-sm-6 news-item">
							<div class="item-wrapper">
								<img class="img-responsive" src="wall.js/ANPFA image/1.jpg" alt="latest news image">

								<div class="item-content">
									<span class="item-date">May 24, 2016</span>
									<h4>Commodo consequ aepteur sint oatat non<a class="read-more-link" href="#">Continue</a></h4>
								</div> <!-- .item-content ends -->
							</div> <!-- .item-wrapper ends -->
						</div> <!-- .col-md-6 news-item ends -->

						<div class="col-sm-6 news-item">
							<div class="item-wrapper">
								<img class="img-responsive" src="wall.js/ANPFA image/2.jpg" alt="latest news image">

								<div class="item-content">
									<span class="item-date">May 24, 2016</span>
									<h4>Commodo consequ aepteur sint oatat non</h4>
								</div> <!-- .item-content ends -->
							</div> <!-- .item-wrapper ends -->
						</div> <!-- .col-md-6 news-item ends -->

						<div class="col-sm-6 news-item">
							<div class="item-wrapper">
								<img class="img-responsive" src="wall.js/ANPFA image/1.jpg" alt="latest news image">

								<div class="item-content">
									<span class="item-date">May 24, 2016</span>
									<h4>Commodo consequ aepteur sint oatat non</h4>
								</div> <!-- .item-content ends -->
							</div> <!-- .item-wrapper ends -->
						</div> <!-- .col-md-6 news-item ends -->
					</div> <!-- .row ends -->
				</div> <!-- .col-md-6 news-block ends -->
			</div> <!-- .row section-content ends -->
		</div> <!-- .container ends -->
	</section> <!-- .latest-news ends -->


	<!-- FEATURED CONTENT -->

	<!-- <section class="featured-content" id="featured-content">		
		<div class="container">
			<div class="content-block">
				<h2>World needs a leader and you need me!</h2>
				<p>
					Lorem ipsur xcepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<button class="btn btn-main btn-normal">Learn More</button>
			</div> --> <!-- .content-block ends -->
			<!-- <div class="image-block">
				<img class="img-responsive" src="http://placehold.it/398x528" alt="man image 2">
			</div> --> <!-- .image-block ends -->
		<!-- </div> --> <!-- .container ends -->
	<!-- </section> --> <!-- .featured-content ends -->


	<!-- QUICK LINKS BLOCK -->

	<section class="quick-links-block" id="quick-links-block">
		<div class="container">
			<div class="section-title-block-2">
				<h3>About Us</h3>
				<p>
					<strong>Mission/Vision/Objectives</strong>
				</p>
			</div> <!-- .section-title-block-2 ends -->
			<div class="row section-content">
				<div class="col-md-4 mission-block">
					<div class="content-wrapper">
						<i class="icon ion-ios-paw-outline"></i>
						<h3>Our Mission</h3>
						<p>
							We endeavor to be a very strong and influential voice of small scale farmers in Nepal and all over the world.
						</p>
						<a class="read-more-link" href="aboutus.php">Learn More</a>
					</div> <!-- .content-block ends -->
				</div> <!-- col-md-4 ends -->

				<div class="col-md-4 vision-block">
					<div class="content-wrapper">
						<i class="icon ion-ios-eye-outline"></i>
						<h3>Our Vision</h3>
						<p>
						 ANPFa envision sovereign individuals in an equitable neo-socialist society enjoying their rights for dignified 
						</p>
						<a class="read-more-link" href="aboutus.php">Learn More</a>
					</div> <!-- .content-block ends -->
				</div> <!-- col-md-4 ends -->

				<div class="col-md-4 issue-block">
					<div class="content-wrapper">
						<i class="icon ion-ios-paper-outline"></i>
						<h3>Our Objectives</h3>
						<p>
							*To mobilize all section of Peasants populace in favor of genuine agrarian reforms
						</p>
						<a class="read-more-link" href="aboutus.php">Learn More</a>
					</div> <!-- .content-block ends -->
				</div> <!-- col-md-4 ends -->
			</div> <!-- .row section-content ends -->
		</div> <!-- .container-fluid ends -->
	</section> <!-- .quick-links-block ends -->


	<!-- PRESS RELEASE -->

	<!-- <section class="press-release section-block-2" id="press-release">
		<div class="container">
			<div class="section-title-block-2">
				<h3>Press Release</h3>
				<p>
					Lorem ipsum in reprehe velit essn
					proident, sunt eprehe velin culpa qui id est laborum.
				</p>
			</div> --> <!-- .section-title-block-2 ends -->

			<!-- <div class="row section-content">
				<div class="col-md-4">
					<div class="image-block">
						<img class="img-responsive" src="http://placehold.it/360x258" alt="press release image">
					</div> --> <!-- .image-block ends -->

					<!-- <div class="content-block">
						<h3>Epteur sint ocecat cutat no</h3>

						<div class="content-details">
							<span class="press-date">May 24, 2016</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor dolore mag culit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> --> <!-- .content-details ends -->
					<!-- </div> --> <!-- .content-block ends -->
				<!-- </div>  --><!-- .col-md-4 ends -->

				<!-- <div class="col-md-4">
					<div class="image-block">
						<img class="img-responsive" src="http://placehold.it/360x258" alt="press release image">
					</div>  --><!-- .image-block ends -->

					<!-- <div class="content-block">
						<h3>Epteur sint ocecat cutat no</h3>

						<div class="content-details">
							<span class="press-date">May 24, 2016</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor dolore mag culit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> --> <!-- .content-details ends -->
					<!-- </div> --> <!-- .content-block ends -->
				<!-- </div> --> <!-- .col-md-4 ends -->

				<!-- <div class="col-md-4">
					<div class="image-block">
						<img class="img-responsive" src="http://placehold.it/360x258" alt="press release image">
					</div> --> <!-- .image-block ends -->

					<!-- <div class="content-block">
						<h3>Epteur sint ocecat cutat no</h3>

						<div class="content-details">
							<span class="press-date">May 24, 2016</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor dolore mag culit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> --> <!-- .content-details ends -->
					<!-- </div> --> <!-- .content-block ends -->
				<!-- </div> --> <!-- .col-md-4 ends -->
			<!-- </div> --> <!-- .row section-content ends -->
		<!-- </div> --> <!-- .container ends -->
	<!-- </section> --> <!-- .press-release ends -->

	<!-- TESTIMONIAL -->

	<section class="testimonial section-block" id="testimonial">
		<div class="container">
			<div class="section-title-block">
				<h2>Our Journey</h2>
				<div class="title-style">
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
				</div>
				<p>
					Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident.
				</p>
			</div> <!-- .section-title-block ends -->

			<div class="row section-content">
				<div class="col-md-8 col-md-offset-2">
					<div class="testimonial-carousel" id="testimonial-carousel">
						<div class="testimonial-item">
							<div class="item">
								<span class="quote-icon"><i class="icon ion-quote"></i></span>
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco ore magna aliq laid est laborum.
								</blockquote>
								<div class="quote-author">
									<div class="image-wrapper">
										<img class="img-responsive" src="http://placehold.it/80x80" alt="quote author image">
									</div> <!-- .image-wrapper ends -->
									

									<div class="author-details">
										<h4>Andromina Eva</h4>
										<span>Ceo</span>
										<p>Manual Communication</p>
									</div> <!-- .author-details ends -->

								</div> <!-- .quote-author ends -->
							</div> <!-- .item ends -->
						</div> <!-- .testimonial-item ends -->

						<div class="testimonial-item">
							<div class="item">
								<span class="quote-icon"><i class="icon ion-quote"></i></span>
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco ore magna aliq laid est laborum.
								</blockquote>
								<div class="quote-author">
									<div class="image-wrapper">
										<img class="img-responsive" src="http://placehold.it/80x80" alt="quote author image">
									</div> <!-- .image-wrapper ends -->
									

									<div class="author-details">
										<h4>Andromina Eva</h4>
										<span>Ceo</span>
										<p>Manual Communication</p>
									</div> <!-- .author-details ends -->

								</div> <!-- .quote-author ends -->
							</div> <!-- .item ends -->
						</div> <!-- .testimonial-item ends -->

						<div class="testimonial-item">
							<div class="item">
								<span class="quote-icon"><i class="icon ion-quote"></i></span>
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco ore magna aliq laid est laborum.
								</blockquote>
								<div class="quote-author">
									<div class="image-wrapper">
										<img class="img-responsive" src="http://placehold.it/80x80" alt="quote author image">
									</div> <!-- .image-wrapper ends -->
									

									<div class="author-details">
										<h4>Andromina Eva</h4>
										<span>Ceo</span>
										<p>Manual Communication</p>
									</div> <!-- .author-details ends -->

								</div> <!-- .quote-author ends -->
							</div> <!-- .item ends -->
						</div> <!-- .testimonial-item ends -->

					</div> <!-- .content-wrapper ends -->
				</div> <!-- .col-md-8 col-md-offset-2 ends -->
			</div> <!-- .section-content ends -->
		</div> <!-- .container ends -->
	</section> <!-- .testimonial section-block ends -->

	<!-- CAMPAIGN EVENTS -->

	<!-- <section class="campaign-events section-block-2" id="campaign-events">
		<div class="container">
			<div class="row section-content">
				<div class="col-lg-6 campaign-block">
					<h3 class="block-title">Featured Campaign</h3>
					<div class="image-wrapper">
						<img class="img-responsive" src="http://placehold.it/420x339" alt="campaign images">
					</div>  --><!-- .image-wrapper ends -->
					<!-- <div class="campaign-content">
						<h2>Campaign for federal central election</h2>

						<div class="campaign-details">
							<ul class="campaign-meta">
								<li>Manager: <span>John Doe</span></li>
								<li>Budget: <span>$1.5 M</span></li>
								<li>Area: <span>New York</span></li>
							</ul>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incir. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> --> <!-- .campaign-details ends -->
					<!-- </div> --> <!-- .campaign-content ends -->
				<!-- </div> --> <!-- .col-lg-6 ends -->
				<!-- <div class="col-lg-6 event-block">
					<h3 class="block-title">Upcomming Events</h3>

					<ul class="event-list">
						<li class="event clearfix">
							<div class="image-block">
								<img class="img-responsive" src="http://placehold.it/500x357" alt="event image">
							</div> --> <!-- .image-block ends -->
							<!-- <div class="content-block">
								<span class="event-date">May 24, 2020</span>
								<div class="event-details">
									<h2>Eepteur sint o erunt mo est laboru</h2>
									<ul class="event-meta">
										<li>Time: <span>10.00 am</span></li>
										<li>Place: <span>Kathmandu University</span></li>
									</ul> --> <!-- .event-meta ends -->
									<!-- <div class="event-footer">
										<a class="join-link" href="#">Join Now</a>
										<a class="read-more-link" href="#">Learn More</a>
									</div> --> <!-- .event-footer ends -->
								<!-- </div> --> <!-- .event-details ends -->
							<!-- </div> --> <!-- .content-block ends -->
						<!-- </li> --> <!-- .event ends -->

						<!-- <li class="event clearfix">
							<div class="image-block">
								<img class="img-responsive" src="http://placehold.it/500x357" alt="event image">
							</div> --> <!-- .image-block ends -->
							<!-- <div class="content-block">
								<span class="event-date">May 24, 2020</span>
								<div class="event-details">
									<h2>Eepteur sint o erunt mo est laboru</h2>
									<ul class="event-meta">
										<li>Time: <span>10.00 am</span></li>
										<li>Place: <span>Kathmandu University</span></li>
									</ul> --> <!-- .event-meta ends -->
									<!-- <div class="event-footer">
										<a class="join-link" href="#">Join Now</a>
										<a class="read-more-link" href="#">Learn More</a>
									</div> --> <!-- .event-footer ends -->
								<!-- </div> --> <!-- .event-details ends -->
							<!-- </div> --> <!-- .content-block ends -->
						<!-- </li> --> <!-- .event ends -->
					<!-- </ul> --> <!-- .event-list ends -->
				<!-- </div> --> <!-- .col-lg-6 ends -->
			<!-- </div> --> <!-- .row ends -->
		<!-- </div> --> <!-- .container ends -->
	<!-- </section> --> <!-- .campaign-events ends -->


	<!-- FEATURED EVENT  -->

	<!-- <section class="featured-event" id="featured-event">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 event-block">
					<h2>Upcomming Election</h2>

					<ul class="event-counting">
						<li>
							<h3><span class="days">239</span> <small>Days</small></h3>
						</li>
						<li>
							<h3><span class="hours">23</span> <small>Hours</small></h3>
						</li>
						<li>
							<h3><span class="minutes">9</span> <small>Minutes</small></h3>
						</li>
						<li>
							<h3><span class="seconds">49</span> <small>Seconds</small></h3>
						</li>
					</ul>
				</div> --> <!-- .col-lg-8 ends -->

				<!-- <div class="col-lg-4 facts-block">
					<ul class="facts-content">
						<li>
							<div class="icon-block"><i class="icon ion-ios-people-outline"></i></div>
							<h3><strong class="timer" data-from="100000" data-to="232343" data-speed="5000">232,343</strong> <span>Volunteers</span></h3>
						</li>

						<li>
							<div class="icon-block"><i class="icon ion-ios-briefcase-outline"></i></div>
							<h3><strong class="timer" data-from="10000" data-to="32343" data-speed="5000">32,343</strong> <span>Projects</span></h3>
						</li>

						<li>
							<div class="icon-block"><i class="icon ion-ios-chatboxes-outline"></i></div>
							<h3><strong class="timer" data-from="1000" data-to="2343" data-speed="5000">2,343</strong> <span>Campaigns</span></h3>
						</li>

						<li>
							<div class="icon-block"><i class="icon ion-ios-heart-outline"></i></div>
							<h3><strong class="timer" data-from="1000" data-to="343" data-speed="5000">343</strong> <span>Awards</span></h3>
						</li>
					</ul>
				</div>  --><!-- .col-lg-4 ends -->
			<!-- </div> --> <!-- .row ends -->
			
		<!-- </div> --> <!-- .container-fluid ends -->
	<!-- </section> --> <!-- .featured-event ends -->


	<!-- OUR MEMBERS -->

	<section class="our-members section-block" id="our-members">
		<div class="container">
			<div class="section-title-block">
				<h2>Our Members <span>See our soldiers</span></h2>
				<div class="title-style">
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
				</div>
			</div> <!-- .section-title-block ends -->

			<div class="row section-content">
				<div class="col-lg-3 member-block">
					<div class="content-wrapper">
						<img class="img-responsive" src="img/bam.jpg"alt="member photo">

						<div class="member-content">
							<h4 class="member-name">Bamdev Gautam</h4>
							<span class="designation">President</span>
							<div class="hover-content">
								<p>
									Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<ul class="social-links">
									<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
								</ul> <!-- .social-links ends -->
							</div> <!-- .hover-content ends -->
							
						</div> <!-- .member-content ends -->
					</div> <!-- .content-wrapper ends -->
				</div> <!-- .col-lg-3 member-block ends -->

				<div class="col-lg-3 member-block">
					<div class="content-wrapper">
						<img class="img-responsive" src="http://placehold.it/265x375" alt="member photo">

						<div class="member-content">
							<h4 class="member-name">Alex Murphy</h4>
							<span class="designation">Chairman</span>
							<div class="hover-content">
								<p>
									Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<ul class="social-links">
									<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
								</ul> <!-- .social-links ends -->
							</div> <!-- .hover-content ends -->
							
						</div> <!-- .member-content ends -->
					</div> <!-- .content-wrapper ends -->
				</div> <!-- .col-lg-3 member-block ends -->

				<div class="col-lg-3 member-block">
					<div class="content-wrapper">
						<img class="img-responsive" src="http://placehold.it/265x375" alt="member photo">

						<div class="member-content">
							<h4 class="member-name">James Anderson</h4>
							<span class="designation">Member</span>
							<div class="hover-content">
								<p>
									Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<ul class="social-links">
									<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
								</ul> <!-- .social-links ends -->
							</div> <!-- .hover-content ends -->
							
						</div> <!-- .member-content ends -->
					</div> <!-- .content-wrapper ends -->
				</div> <!-- .col-lg-3 member-block ends -->

				<div class="col-lg-3 member-block">
					<div class="content-wrapper">
						<img class="img-responsive" src="http://placehold.it/265x375" alt="member photo">

						<div class="member-content">
							<h4 class="member-name">Amenda Parker</h4>
							<span class="designation">Cashier</span>
							<div class="hover-content">
								<p>
									Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<ul class="social-links">
									<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
								</ul> <!-- .social-links ends -->
							</div> <!-- .hover-content ends -->
							
						</div> <!-- .member-content ends -->
					</div> <!-- .content-wrapper ends -->
				</div> <!-- .col-lg-3 member-block ends -->
			</div> <!-- .row section-content ends -->
		</div> <!-- .container ends -->
	</section> <!-- .our-members ends -->


	<!-- EMAIL SUBSCRIPTION -->

	<!-- <section class="email-subscription" id="email-subscription">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="icon-block"><i class="icon ion-ios-email-outline"></i></div>
					<div class="content-block">
						<h2>Get latest news</h2>
						<p>Subscribe to our newsletter</p>
					</div>  --><!-- .content-block ends -->
				<!-- </div> --> <!-- .col-md-6 ends -->
				<!-- <div class="col-md-6">
					<form class="subscription-form" id="subscription-form">
						<div class="row no-padding">
							<div class="col-sm-8">
								<div class="form-group">
									<label class="sr-only" for="email">Email:</label>
									<input class="form-control" type="email" id="email" placeholder="Your email here">
									
								</div> --> <!-- .form-group ends -->
							<!-- </div> --> <!-- .col-sm-8 ends -->
							<!-- <div class="col-sm-4">
								<button class="btn btn-main">Submit</button>
							</div> --> <!-- .col-sm-4 ends -->
						<!-- </div> --> <!-- .row ends -->
						
					<!-- </form> --> <!-- .subscrition-form ends -->
				<!-- </div> --> <!-- .form-block ends -->
			<!-- </div> --> <!-- .row ends -->
		<!-- </div> --> <!-- .container ends -->
	<!-- </section> --> <!-- .email-subscriptin ends -->


	<!-- MAIN FOOTER -->
<?php
include('footer.php')
?>
</body>
</html>