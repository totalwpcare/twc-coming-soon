<?php
defined( 'ABSPATH' ) || exit;
$theme_slug = 'twc-blog';
$totalwpcare_maintenance_website_logo = get_option('totalwpcare_maintenance_website_logo');
$totalwpcare_maintenance_display_website_logo = get_option('totalwpcare_maintenance_display_website_logo');
$totalwpcare_maintenance_countdown = get_option('totalwpcare_maintenance_countdown');
$totalwpcare_maintenance_countdown_end_date = get_option('totalwpcare_maintenance_countdown_end_date');
$totalwpcare_maintenance_contact_address = get_option('totalwpcare_maintenance_contact_address');
$totalwpcare_maintenance_contact_email = get_option('totalwpcare_maintenance_contact_email');
$totalwpcare_maintenance_contact_no = get_option('totalwpcare_maintenance_contact_no');
?>
<!-- Bootstrap Min CSS -->
<link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/css/bootstrap.min.css">
<!-- Animate Min CSS -->
<link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/css/animate.min.css">
<!-- FontAwesome Min CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" />
<!-- Style Min CSS -->
<link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/css/responsive.css">


<!-- Preloader -->
<div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- End Preloader -->

        <!-- Start Coming Soon Area -->
        <section class="coming-soon-area">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="coming-soon-content">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <?php if($totalwpcare_maintenance_display_website_logo == 1) { ?>
                                    <div class="logo">
                                        <img src="<?php echo $totalwpcare_maintenance_website_logo ?>" alt="logo" height="60px;">
                                    </div>
                                <?php } ?>
                                    <?php if($totalwpcare_maintenance_countdown == 1) { ?>
                                    <div id="timer">
                                        <div id="days"></div>
                                        <div id="hours"></div>
                                        <div id="minutes"></div>
                                        <div id="seconds"></div>
                                    </div>
                                <?php } ?>
                                    
                                    <h1><?php echo get_option('totalwpcare_maintenance_headline') ?></h1>
                                    <p><?php echo get_option('totalwpcare_maintenance_description') ?></p>

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

                                    <div class="social">
                                        <ul>
                                            <li><a href="<?php echo get_option('totalwpcare_maintenance_social_facebook') ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo get_option('totalwpcare_maintenance_social_linkedin') ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="<?php echo get_option('totalwpcare_maintenance_social_twitter') ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                           <!--  <li><a href="#" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a></li> -->
                                            <li><a href="<?php echo get_option('totalwpcare_maintenance_social_instagram') ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="coming-soon-image">
                            <img src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/img/coming-soon-bg.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Coming Soon Area -->
        
        <!-- jQuery Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/bootstrap.min.js"></script>
        <!-- WOW Min JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/assets/js/wow.min.js"></script>
        <!-- Main JS -->
        <script src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/js/main.js"></script>
        <script type="text/javascript">
            jQuery(document).on('ready', function () {
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
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
        setInterval(function() { makeTimer(); }, 1000);

    });
        </script>