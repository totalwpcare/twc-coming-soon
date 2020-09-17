<?php
defined( 'ABSPATH' ) || exit;
$theme_slug = 'twc-2020';
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
<link href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>/themes/<?php echo $theme_slug ?>/assets/css/style.css">
</head>

<body class="main-bg-image">
<!--<div class="main-bg-image-overlay"></div>-->

<div class="main-wrapper">
	<section class="main-sec">
		<div class="details">
			<?php 
    			if($totalwpcare_maintenance_display_website_logo == 1) { ?>
			<div class="logo text-center">
				<img src="<?php echo $totalwpcare_maintenance_website_logo ?>" class="img-fluid" style="height: 120px">
			</div>
		<?php } ?>
			<h1 class="heading"><?php echo get_option('totalwpcare_maintenance_headline') ?></h1>
			<p class="slogan"><?php echo get_option('totalwpcare_maintenance_description') ?></p>

			<?php
    			if($totalwpcare_maintenance_countdown == 1) { ?>
			<div class="counter-sec">
				<div class="counter">
					<span class="count">
						<h1 id="days">00</h1>
						<p>Days</p>
					</span>
					<span class="count">
						<h1 id="hours">00</h1>
						<p>Hours</p>
					</span>
					<span class="count">
						<h1 id="minutes">00</h1>
						<p>Minutes</p>
					</span>
					<span class="count">
						<h1 id="seconds">00</h1>
						<p>Seconds</p>
					</span>
				</div>
			</div>
		<?php } ?>
			
			<div class="contact">
				<ul>
					<?php if(!empty($totalwpcare_maintenance_contact_no)) { ?>
					<li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $totalwpcare_maintenance_contact_no ?></li>
				<?php } if(!empty($totalwpcare_maintenance_contact_email)) { ?>
					<li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $totalwpcare_maintenance_contact_email ?></li>
				<?php } ?>
				</ul>
				<?php if(!empty($totalwpcare_maintenance_contact_address)) { ?>
				<p class="address">
					<?php echo $totalwpcare_maintenance_contact_address ?>
				</p>
			<?php } ?>
			</div>
			
			 <div class="socials-icons">
				<ul>
					<li><a target="_blank" href="<?php echo get_option('totalwpcare_maintenance_social_facebook') ?>"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="<?php echo get_option('totalwpcare_maintenance_social_twitter') ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="<?php echo get_option('totalwpcare_maintenance_social_linkedin') ?>"><i class="fa fa-linkedin"></i></a></li>
					<li><a target="_blank" href="<?php echo get_option('totalwpcare_maintenance_social_instagram') ?>"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</section>

</div>

<script type="text/javascript">
	var count = new Date("<?php echo date_format(date_create($totalwpcare_maintenance_countdown_end_date), 'F d,Y') ?> 00:00:00").getTime();
	var x = setInterval(function(){
		var now = new Date().getTime();
		var d = count - now;
		
		var days = Math.floor(d/(1000*60*60*24));
		var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
		var minutes = Math.floor((d%(1000*60*60))/(1000*60));
		var seconds = Math.floor((d%(1000*60))/1000);
		
		document.getElementById("days").innerHTML = days;
		document.getElementById("hours").innerHTML = hours;
		document.getElementById("minutes").innerHTML = minutes;
		document.getElementById("seconds").innerHTML = seconds;
		
		if(d <= 0){
			clearInterval(x);
		}
		
	},1000);

</script>


</body>
</html>