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
						<li><a data-scroll href="index.php">Home</a></li>
						<li><a data scroll href="index.php#quick-links-block">About Us</a></li>
						<li><a  href="index.php#our-members">Members</a></li>
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
							<li><a href="blog.php"><?php echo $eng_title;?></a></li>
						<?php } }?>
						
						<!-- <li><a  href="#featured-event">Events</a></li> -->
						<li><a href="contact.php">Contact</a></li>
						
					</ul> <!-- .nav navbar-nav ends -->
				</div> <!-- .collapse navbar-collapse ends -->
			</div> <!-- .container ends -->
		</nav> <!-- .navbar navbar-default ends -->
		
	</header> <!-- .site-header ends -->