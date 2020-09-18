<?php
defined( 'ABSPATH' ) || exit;
$theme_slug = 'twc-event';
$totalwpcare_maintenance_website_logo = get_option('totalwpcare_maintenance_website_logo');
$totalwpcare_maintenance_display_website_logo = get_option('totalwpcare_maintenance_display_website_logo');
$totalwpcare_maintenance_countdown = get_option('totalwpcare_maintenance_countdown');
$totalwpcare_maintenance_countdown_end_date = get_option('totalwpcare_maintenance_countdown_end_date');
$totalwpcare_maintenance_contact_address = get_option('totalwpcare_maintenance_contact_address');
$totalwpcare_maintenance_contact_email = get_option('totalwpcare_maintenance_contact_email');
$totalwpcare_maintenance_contact_no = get_option('totalwpcare_maintenance_contact_no');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale-1">
<title><?php echo get_bloginfo() ?></title>
	  <!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/css/animate.min.css">
    <!-- FontAwesome Min CSS -->
    <link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/css/fontawesome.min.css"/>
    <!-- Style Min CSS -->
    <link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/css/responsive.css">
</head>
<body>
    <?php /* 
<!-- <div class="size1 bg0 where1-parent">
	<?php if($totalwpcare_maintenance_countdown == 1) { ?>
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/images/bg01.jpg');">
			<div class="wsize2 flex-w flex-c-m cd100 js-tilt">
				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 days">35</span>
					<span class="s2-txt4">Days</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 hours">17</span>
					<span class="s2-txt4">Hours</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 minutes">50</span>
					<span class="s2-txt4">Minutes</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 seconds">39</span>
					<span class="s2-txt4">Seconds</span>
				</div>
			</div>
		</div>
	<?php } ?>
		
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<?php if($totalwpcare_maintenance_display_website_logo == 1) { ?>
			<div class="wrap-pic1">
				<img src="<?php echo $totalwpcare_maintenance_website_logo ?>" alt="LOGO">
			</div>
		<?php } ?>

			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					<?php echo get_option('totalwpcare_maintenance_headline') ?>
				</p>
                <div class="contact-details">
                	<?php if(!empty($totalwpcare_maintenance_contact_email)) { ?>
				<div class="media">
                    <i class="fa fa-envelope m-r-10"></i>
                    <div class="media-body">
                            <?php echo $totalwpcare_maintenance_contact_email ?>
                    </div>
                </div>
            <?php } if(!empty($totalwpcare_maintenance_contact_no)) { ?>
                <div class="media">
                    <i class="fa fa-phone-square m-r-10"></i>
                    <div class="media-body">
                            <?php echo $totalwpcare_maintenance_contact_no ?>
                    </div>
                </div>
            <?php } if(!empty($totalwpcare_maintenance_contact_address)) { ?>
                <div class="media">
                    <i class="fa fa-building m-r-10"></i>
                    <div class="media-body">
                    <?php echo $totalwpcare_maintenance_contact_address ?>
                    </div>
                </div>
            <?php } ?>
                </div>
			</div>

			<div class="flex-w">
				<a href="<?php echo get_option('totalwpcare_maintenance_social_facebook') ?>" class="flex-c-m size5 bg3 how1 trans-04 m-r-5" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>

				 <a href="<?php echo get_option('totalwpcare_maintenance_social_linkedin') ?>" class="flex-c-m size5 bg7 how1 trans-04 m-r-5" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>

				<a href="<?php echo get_option('totalwpcare_maintenance_social_twitter') ?>" class="flex-c-m size5 bg4 how1 trans-04 m-r-5" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

                <a href="<?php echo get_option('totalwpcare_maintenance_social_instagram') ?>" class="flex-c-m size5 bg6 how1 trans-04 m-r-5" target="_blank">
					<i class="fa fa-instagram"></i>
                </a>
			</div>
		</div>
	</div> -->
    */ ?>

	<!-- Preloader -->
	<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Navbar Area -->
        <div class="navbar-area">
            <div class="container">
                <div class="navbar-menu">
                    <div class="row align-items-center">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
						<?php if($totalwpcare_maintenance_display_website_logo == 1) { ?>
                            <div class="logo">
                                <a href=""><img src="<?php echo $totalwpcare_maintenance_website_logo ?>" height="60px" alt="image"></a>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        
        <!-- Start Main Banner -->
        <div class="main-banner">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <h1><?php echo get_option('totalwpcare_maintenance_headline') ?></h1>
                            <p><?php echo get_option('totalwpcare_maintenance_description') ?></p>
                            <?php if($totalwpcare_maintenance_countdown == 1) { ?>
                                    <div id="timer">
                                        <div id="days"></div>
                                        <div id="hours"></div>
                                        <div id="minutes"></div>
                                        <div id="seconds"></div>
                                    </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <ul class='slideshow'>
				<li><span></span></li>
				<li><span></span></li>
				<li><span></span></li>
				<li><span></span></li>
			</ul>
        </div>
        <!-- End Main Banner -->

        <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="about-area">
                    <div class="title">
                        <h2>About Us</h2>
                        <p><?php echo get_option('totalwpcare_maintenance_description') ?></p>
                    </div>
                </div>

                <div class="contact-area">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="contact-form">
					<div class="contact-details">
                                        <?php if(!empty($totalwpcare_maintenance_contact_email)) { ?>
				                        <div class="media">
                                            <i class="fa fa-envelope mr-2"></i>
                                            <div class="media-body">
                                                    <?php echo $totalwpcare_maintenance_contact_email ?>
                                            </div>
                                        </div>
                                        <?php } if($totalwpcare_maintenance_contact_no) { ?>
                                        <div class="media">
                                            <i class="fa fa-phone-square mr-2"></i>
                                            <div class="media-body">
                                                    <?php echo $totalwpcare_maintenance_contact_no ?>
                                            </div>
                                        </div>
                                    <?php }  if($totalwpcare_maintenance_contact_address) { ?>
                                        <div class="media">
                                            <i class="fa fa-building mr-2"></i>
                                            <div class="media-body">
                                            <?php echo $totalwpcare_maintenance_contact_address ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                    </div>

                    <div class="contact-info">
                        <div class="contact-info-content">
    
                            <ul class="social">
                        <li><a href="<?php echo get_option('totalwpcare_maintenance_social_facebook') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <!-- <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li> -->
                        <li><a href="<?php echo get_option('totalwpcare_maintenance_social_linkedin') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="<?php echo get_option('totalwpcare_maintenance_social_twitter') ?>" target="_blank"><i class="fab fa-twitter"></i></a></i></li>
                        <li><a href="<?php echo get_option('totalwpcare_maintenance_social_instagram') ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn"><i class="fas fa-times"></i></span>
            </div>
        </div>
        <!-- End Sidebar Modal -->

        <?php wp_footer(); ?>
        <!-- Popper Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/bootstrap.min.js"></script>
        <!-- WOW Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/wow.min.js"></script>
        <!-- Main JS -->
		<script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/js/main.js"></script>
		<script type="text/javascript">
             // Count Time 
        function makeTimer() {
            var endTime = new Date("<?php echo date_format(date_create($totalwpcare_maintenance_countdown_end_date), 'F d,Y') ?> 00:00:00");          
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            jQuery("#days").html(days + "<span>Days</span>");
            jQuery("#hours").html(hours + "<span>Hours</span>");
            jQuery("#minutes").html(minutes + "<span>Minutes</span>");
            jQuery("#seconds").html(seconds + "<span>Seconds</span>");
        }
        setInterval(function() { makeTimer(); }, 300);
        </script>
</body>
</html>