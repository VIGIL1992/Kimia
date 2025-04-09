<?php
// Get the current page filename
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Preloader -->
<!-- <div class="preloader"></div> -->

<!-- Main Header-->
<header class="main-header <?= ($current_page == 'index.php') ? 'header-style-one' : 'header-style-four'; ?>">

	<!-- Header Upper -->
	<div class="header-upper">
		<div class="auto-container clearfix navbar1  align-items-center">

			<style>
				@media (max-width: 1022px) {

					
					.navbar1 {
						display: flex;
						
						align-items: center;
						
					}
				}
			</style>

			<div class="pull-left logo-box">
				<div class="logo"><a href="index.php"><img src="images/logo8.png" alt="" title=""></a></div>
			</div>

			<div class="nav-outer clearfix">
				<!--Mobile Navigation Toggler-->
				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
				<!-- Main Menu -->
				<nav class="main-menu navbar-expand-md">
					<div class="navbar-header">
						<!-- Toggle Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse clearfix d-md-none" id="navbarSupportedContent">
						<ul class="navigation clearfix">
							<li class="<?= ($current_page == 'index.php') ? 'current' : ''; ?>"><a href="index.php">Home</a></li>
							<li class="<?= ($current_page == 'about.php') ? 'current' : ''; ?>"><a href="about.php">Who we are</a></li>
							<li class="<?= ($current_page == 'what_we_do.php') ? 'current' : ''; ?>"><a href="what_we_do.php">What we do</a></li>
							<li class="<?= ($current_page == 'products.php') ? 'current' : ''; ?>"><a href="products.php">Products</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					</div>

				</nav>

				<!-- Main Menu End-->
				<div class="outer-box clearfix">

					<!-- Search Btn -->
					<!-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->

					<!-- Nav Btn -->
					<!-- <div class="nav-btn navSidebar-button  d-lg-none"><span class="icon flaticon-menu-2"></span></div> -->

				</div>
			</div>

		</div>
	</div>
	<!--End Header Upper-->

	<!-- Sticky Header  -->
	<div class="sticky-header">
		<div class="auto-container clearfix">
			<!--Logo-->
			<div class="logo pull-left">
				<a href="index.php" title=""><img src="images/logo8.png" alt="" title=""></a>
			</div>
			<!--Right Col-->
			<div class="pull-right">
				<!-- Main Menu -->
				<nav class="main-menu">
					<!--Keep This Empty / Menu will come through Javascript-->
				</nav><!-- Main Menu End-->

				<!-- Main Menu End-->
				<div class="outer-box clearfix">

					<!-- Search Btn -->
					<!-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->

					<!-- Nav Btn -->
					<!-- <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div> -->
					<div class="mobile-nav-toggler d-lg-none">
						<span class="icon flaticon-menu"></span>
					</div>

				</div>

			</div>
		</div>
	</div><!-- End Sticky Menu -->

	<!-- Mobile Menu  -->
	<div class="mobile-menu">
		<div class="menu-backdrop"></div>
		<div class="close-btn"><span class="icon flaticon-multiply"></span></div>

		<nav class="menu-box">
			<div class="nav-logo"><a href="index.php"><img src="images/logo8.png" alt="" title=""></a></div>
			<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
		</nav>
	</div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
	<div class="xs-overlay xs-bg-black"></div>
	<div class="xs-sidebar-widget">
		<div class="sidebar-widget-container">
			<div class="widget-heading">
				<a href="#" class="close-side-widget">
					X
				</a>
			</div>
			<div class="sidebar-textwidget">

				<!-- Sidebar Info Content -->
				<div class="sidebar-info-contents">
					<div class="content-inner">
						<div class="logo">
							<a href="index.php"><img src="images/logo8.png" alt="" /></a>
						</div>
						<div class="content-box">
							<h2>About Us</h2>
							<p class="text">
								Kimia Lazeez was established in 2021 as a modern and innovative company specializing in providing high-quality solutions for the food industry.
							</p>
							<a href="contact.php" class="theme-btn btn-style-one clearfix"><span class="icon"></span>Contact</a>
						</div>
						<div class="contact-info">
							<h2>Contact Info</h2>
							<ul class="list-style-one">
								<li><span class="icon fa fa-location-arrow"></span>Office 41, Innov8 space, 12th floor, I-Rise tower, Tecom, Dubai-UAE</li>
								<li><span class="icon fa fa-phone"></span>971 581001589</li>
								<li><span class="icon fa fa-envelope"></span>info@yourdomain.com</li>
								<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
							</ul>
						</div>
						<!-- Social Box -->
						<ul class="social-box">
							<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
							<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
							<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
							<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
							<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- END sidebar widget item -->