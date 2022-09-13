<?php
	include('connection.php');
	//print_r($_SESSION); 

	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['udata']);
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/thecrowd/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 14:42:56 GMT -->
<head>
	<title>Your Wed Your Way</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/cue.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/mediaelementplayer-legacy.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="http://html.modernwebtemplates.com/thecrowd/">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<section class="page_toplogo with_bottom_overlap_logo ls with_top_color_border columns_padding_0">
				<div class="container">
					<div class="row flex-wrap v-center">
						<div class="col-sm-2 col-sm-push-5 text-left text-sm-center">
							<div class="bottom_overlap_logo"> <a href="index.php" class="logo">
	                    <img src="images/logo.png" alt="">
	                </a> </div>
							<!-- header toggler --><span class="toggle_menu"><span></span></span>
						</div>
						<div class="col-sm-5 col-sm-pull-2 hidden-xs"> <span class="rightpadding_20 hidden-sm">Follow Us:</span> <span class="divided-content">
					<span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>							<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </span>
						</div>
						<div class="col-sm-5 text-left text-sm-right">
							<div class="divided-content greylinks color2">
								<div>
									<div class="dropdown"> 
										<a href="#0" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My account
											<span class="caret"></span>
	                					</a>
										<ul class="dropdown-menu" aria-labelledby="account-dropdown">
											<!-- <li> <a href="login.php">Sign Up</a> </li> -->
											<?php
												if($_SESSION['udata']['id']){
											?>
												<li> <a href="index.php?p=profile">Profile </a> </li>
											<?php } else { ?>
												<li> <a href="login.php">Sign Up</a> <li>
												<li> <a href="login.php">Sign In</a> </li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<?php
											if($_SESSION['udata']['id']){
										?>
											&nbsp;
											<?php echo $_SESSION['udata']['fname'] . " " . $_SESSION['udata']['lname'] ?>
											<a href="index.php?logout">	
												<span class="fa fa-sign-out"></span> LOG OUT
											</a>
										<?php } ?>
								<!-- <div class="hidden-sm hidden-xs"> 
									<a href="index.php?p=shop-cart-right" class="cart-button">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
										<span class="total-price">
											$00,00
										</span>
                					</a> 
								</div> -->
								<!-- <div class="hidden-xs hidden-sm">
									<div class="dropdown inline-block"> 
										<a href="#" id="search-dropdown" class="theme_button no_bg_button square_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                							<i class="fa fa-search" aria-hidden="true"></i>
                						</a>
										<div class="dropdown-menu" aria-labelledby="search-dropdown">
											<div class="widget widget_search">
												<form method="get" class="searchform form-inline" action="http://html.modernwebtemplates.com/thecrowd/">
													<div class="form-group-wrap">
														<div class="form-group margin_0"> <label class="sr-only" for="topline-search">Search for:</label> <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword"> </div> <button type="submit" class="theme_button no_bg_button">Search</button>														</div>
												</form>
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<header class="page_header header_darkgrey background_cover divided_items with_menu_icon home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active"> <a href="index.php">Home</a> </li>
									<li> <a href="index.php?p=albums">free albums</a> </li>
									<?php if($_SESSION['udata']['role'] == 'user') { ?>
									<li> <a href="#">book artists</a>
										<ul>
											<li> <a href="index.php?p=book-artist">book artist</a> </li>	
										</ul>
									</li>
									<?php } ?>
									<?php if($_SESSION['udata']['role'] == 'artist') { ?>
									<li> <a href="#">artists</a>
										<ul>
											<li> <a href="index.php?p=profile">artist registration</a> </li>	
										</ul>
									</li>
									<?php } ?>
									<li> <a href="index.php?p=gallery-tile">Photos</a> </li>
									<li> <a href="index.php?p=contact">Contact us</a> </li>
									<?php if($_SESSION['udata']['role'] == 'artist') { ?>
										<li> <a href="index.php?p=userlist">user list</a> </li>
									<?php } ?>
									<li> <a href="index.php?p=about">more</a>
										<ul>
											<li> <a href="index.php?p=about">About</a> </li>
											<li> <a href="index.php?p=events-left">Events</a> </li>
											<li> <a href="index.php?p=team">Team</a> </li>
											<li> <a href="index.php?p=comingsoon">Comingsoon</a> </li>
											<li> <a href="index.php?p=faq">FAQ</a> </li>
										</ul>
									</li>
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>
			
			<?php
				if(isset($_GET['p']) && file_exists($_GET['p'] . '.php') && $_GET['p']){
					include($_GET['p'] . '.php');
				} else{
					include('home.php');
				}
			?>	
			
			<?php
				if(!isset($_GET['p'])) { ?>
					<script>
						const element = document.getElementsByClassName('home');
						for (const list of element) {
							list.classList.add('header_transparent');
						}
					</script>
				<?php }
			?>

			<footer class="page_footer ds section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="cs gradient_bg with_padding big-padding">
								<div class="row columns_padding_0">
									<div class="col-md-3 col-sm-4 text-center text-sm-left">
										<h5 class="margin_0"> <span class="small">Register for</span><br> Our newsletter </h5>
									</div>
									<div class="col-md-6 col-sm-4">
										<div class="widget widget_mailchimp margin_0">
											<form class="signup" action="http://html.modernwebtemplates.com/thecrowd/" method="get">
												<div class="form-group margin_0"> <input class="mailchimp_email form-control" name="email" required="" type="email" placeholder="Email Address"> </div> <button type="submit" class="theme_button color3 no_bg_button">Subscribe now</button>
												<div class="response"></div>
											</form>
										</div>
									</div>
									<div class="col-md-3 col-sm-4 text-center text-sm-right">
										<h5 class="margin_0"> <span class="small">Get the latest</span><br>Your Wed Your Way News</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title"> Our new albums </h4>
								<ul class="greylinks list-unstyled">
									<li> <a href="index.php?p=about">Happy Sweet</a> </li>
									<li> <a href="index.php?p=albums">World's Apart</a> </li>
									<li> <a href="index.php?p=events-left">Events</a> </li>
									<li> <a href="index.php?p=contact">Contact Us</a> </li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title"> Download Avaliable </h4>
								<p>You Can Book A New Artist In Show The Perfomance And Experience</p>
								<div class="big-icons topmargin_25"> <a href="#" class="social-icon border-icon socicon-apple"></a> <a href="#" class="social-icon border-icon socicon-google"></a> <a href="#" class="social-icon border-icon socicon-youtube"></a> </div>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title"> Contact us </h4>
								<ul class="list-unstyled greylinks">
									<li> DR. SUBHASH COLLAGE, JUNAGADH </li>
									<li> +91 9662086912 </li>
									<li> +91 9664969551 </li>
									<li> <a href="service.yourwedy@gmail.com">service.yourwedy@gmail.com</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<section class="ds page_copyright section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="divided-content bottommargin_5"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>								<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
							<p class="small-text big-spacing">&copy; Copyright 2022. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<!-- Google Map Script -->
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4"></script> -->
</body>


<!-- Mirrored from html.modernwebtemplates.com/thecrowd/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 14:46:11 GMT -->
</html>