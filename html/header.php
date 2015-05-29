<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery-ui/jquery-ui.min.css" />

    <link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
	<title>Nella Fashion</title>
</head>
<body>
	<div class="page-outter">
		<div class="page-wrapper">
			<!-- HEADER -->
			<header id="header">
				<div id="top-bar">
					<div class="container">
						<div class="top-bar-link top-bar-text">
							<div class="link-container">
								Welcome visitor you can <a href="#">login</a> or create an account
							</div>
						</div>
						<div class="top-bar-link top-bar-currencies">
							<div class="link-container dropdown">
							  <a  class="current-selected" href="#" data-toggle="dropdown">
							    USD
							  </a>

							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							    <li>
							    	<a href="#">USD</a>
							    </li>
							    <li>
							    	<a href="#">EUR</a>
							    </li>
							  </ul>
							</div>
						</div>
						<div class="top-bar-link top-bar-languages">
							<div class="link-container dropdown">
							  <a class="current-selected" href="#" data-toggle="dropdown">
							    <span><img src="data/images/en.jpg" alt="languages"></span>
							  </a>

							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							    <li>
							    	<a href="#"><span><img src="data/images/en.jpg" alt="languages"></span> USD</a>
							    </li>
							    <li>
							    	<a href="#"><span><img src="data/images/fr.jpg" alt="languages"></span> EUR</a>
							    </li>
							  </ul>
							</div>
						</div>
						<div class="top-bar-link top-bar-services">
							<div class="link-container right-dropdown dropdown">
							  <a class="current-selected" href="#" data-toggle="dropdown">
							    Services
							  </a>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							    <li>
							    	<a href="#">Delivery</a>
							    </li>
							    <li>
							    	<a href="#">Legal Notice</a>
							    </li>
							    <li>
							    	<a href="#">About Us</a>
							    </li>
							    <li>
							    	<a href="#">Secure Payment</a>
							    </li>
							  </ul>
							</div>
						</div>
						<div class="top-bar-link top-bar-support">
							<div class="link-container right-dropdown dropdown">
							  <a class="current-selected" href="#" data-toggle="dropdown">
							    Help
							  </a>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							    <li>
							    	<a href="#">Legal Notice </a>
							    </li>
							    <li>
							    	<a href="#">Secure Payment </a>
							    </li>
							    <li>
							    	<a href="#">Return & Refund </a>
							    </li>
							    <li>
							    	<a href="#">Help Desk </a>
							    </li>
							  </ul>
							</div>
						</div>
						<div class="top-bar-link top-bar-user-info">
							<div class="link-container dropdown right-dropdown">
							  <a class="current-selected" href="#" data-toggle="dropdown">
							    My Account
							  </a>

							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							    <li>
							    	<a href="#">Login</a>
							    </li>
							    <li>
							    	<a href="#">Compare</a>
							    </li>
							    <li>
							    	<a href="#">Wishlists</a>
							    </li>
							  </ul>
							</div>
						</div>
						
						
					</div>
				</div>
				<div id="main-header">
					<div class="container">
						<!-- main-header-top -->
						<div class="main-header-top clearfix">
							<div class="logo">
								<a href="#"><img src="data/images/logo.jpg" alt="Nella Fashion"></a>
							</div>
							<!-- shopping-cart -->
							<div class="shopping-cart-top">
								<a class="info-cart" href="#">
									<p><span class="shopping-cart-name">Shopping Cart</span></p>
									<p class="shopping-cart-desc">
										<span class="shopping-cart-qty">0 Item(s)</span>
										<span class="shopping-cart-total"> - $0.00</span>
									</p>

								</a>
							</div>
							<!-- ./shopping-cart -->
							<!-- search-form -->
							<div class="search-form">
								<div class="serach-category">
									<select id="category-select" name="category">
										<option value="1">All Categries</option>
										<option value="2">Men</option>
										<option value="3">Women</option>
									</select>
								</div>
								<div class="input-search">
									<input type="text" placeholder="Enter your keyword...">
								</div>
								<div class="btn-search">
									<button><i class="fa fa-search"></i></button>
								</div>
							</div>
							<!-- ./search-form -->
						</div>
						<!-- ./main-header-top-->
						<!-- Main menu -->
						<nav id="main-menu">
							@
						</nav>
						<!-- ./Main menu -->
					</div>
				</div>
			</header>
			<!-- ./HEADER -->