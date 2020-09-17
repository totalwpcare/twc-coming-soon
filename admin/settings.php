<?php
    if(!empty($_POST['totalwpcare_setup_updated']))
    {
        $twc_maintenance_mode_active = sanitize_text_field($_POST['totalwpcare_maintenance_mode']);
        $totalwpcare_maintenance_website_logo = esc_url_raw($_POST['totalwpcare_maintenance_website_logo']);
        $totalwpcare_maintenance_display_website_logo = sanitize_text_field($_POST['totalwpcare_maintenance_display_website_logo']);
        $totalwpcare_maintenance_headline = sanitize_text_field($_POST['totalwpcare_maintenance_headline']);
        $totalwpcare_maintenance_description = sanitize_text_field($_POST['totalwpcare_maintenance_description']);
        $totalwpcare_maintenance_countdown = sanitize_text_field($_POST['totalwpcare_maintenance_countdown']);
        $totalwpcare_maintenance_countdown_end_date = sanitize_text_field($_POST['totalwpcare_maintenance_countdown_end_date']);
        $totalwpcare_maintenance_social_facebook = esc_url_raw($_POST['totalwpcare_maintenance_social_facebook']);
        $totalwpcare_maintenance_social_linkedin = esc_url_raw($_POST['totalwpcare_maintenance_social_linkedin']);
        $totalwpcare_maintenance_social_twitter = esc_url_raw($_POST['totalwpcare_maintenance_social_twitter']);
        $totalwpcare_maintenance_social_instagram = esc_url_raw($_POST['totalwpcare_maintenance_social_instagram']);
        $totalwpcare_maintenance_contact_address = sanitize_text_field($_POST['totalwpcare_maintenance_contact_address']);
        $totalwpcare_maintenance_contact_email = sanitize_email($_POST['totalwpcare_maintenance_contact_email']);
        $totalwpcare_maintenance_contact_no = sanitize_text_field($_POST['totalwpcare_maintenance_contact_no']);
        update_option('totalwpcare_maintenance_mode', $twc_maintenance_mode_active);
        update_option('totalwpcare_maintenance_website_logo', $totalwpcare_maintenance_website_logo);
        update_option('totalwpcare_maintenance_display_website_logo', $totalwpcare_maintenance_display_website_logo);
        update_option('totalwpcare_maintenance_headline', $totalwpcare_maintenance_headline);
        update_option('totalwpcare_maintenance_description', $totalwpcare_maintenance_description);
        update_option('totalwpcare_maintenance_countdown', $totalwpcare_maintenance_countdown);
        update_option('totalwpcare_maintenance_countdown_end_date', $totalwpcare_maintenance_countdown_end_date);
        update_option('totalwpcare_maintenance_social_facebook', $totalwpcare_maintenance_social_facebook);
        update_option('totalwpcare_maintenance_social_linkedin', $totalwpcare_maintenance_social_linkedin);
        update_option('totalwpcare_maintenance_social_twitter', $totalwpcare_maintenance_social_twitter);
        update_option('totalwpcare_maintenance_social_instagram', $totalwpcare_maintenance_social_instagram);
        update_option('totalwpcare_maintenance_contact_address', $totalwpcare_maintenance_contact_address);
        update_option('totalwpcare_maintenance_contact_email', $totalwpcare_maintenance_contact_email);
        update_option('totalwpcare_maintenance_contact_no', $totalwpcare_maintenance_contact_no);
        ?>
            <div class="notice notice-success is-dismissible"> 
                <p><strong>TWC Settings updated successfully.</strong></p>
                <button type="button" class="notice-dismiss">
                    <span class="screen-reader-text">Dismiss this notice.</span>
                </button>
            </div>
            <?php
    }

    $twc_maintenance_mode_active = get_option('totalwpcare_maintenance_mode');
    $totalwpcare_maintenance_active_theme = get_option('totalwpcare_maintenance_active_theme');
    $totalwpcare_maintenance_website_logo = get_option('totalwpcare_maintenance_website_logo');
    $totalwpcare_maintenance_display_website_logo = get_option('totalwpcare_maintenance_display_website_logo');
    $totalwpcare_maintenance_headline = get_option('totalwpcare_maintenance_headline');
    $totalwpcare_maintenance_description = get_option('totalwpcare_maintenance_description');
    $totalwpcare_maintenance_countdown = get_option('totalwpcare_maintenance_countdown');
    $totalwpcare_maintenance_countdown_end_date = get_option('totalwpcare_maintenance_countdown_end_date');
    $totalwpcare_maintenance_social_facebook = get_option('totalwpcare_maintenance_social_facebook');
    $totalwpcare_maintenance_social_linkedin = get_option('totalwpcare_maintenance_social_linkedin');
    $totalwpcare_maintenance_social_twitter = get_option('totalwpcare_maintenance_social_twitter');
    $totalwpcare_maintenance_social_instagram = get_option('totalwpcare_maintenance_social_instagram');
    $totalwpcare_maintenance_contact_address = get_option('totalwpcare_maintenance_contact_address');
    $totalwpcare_maintenance_contact_email = get_option('totalwpcare_maintenance_contact_email');
    $totalwpcare_maintenance_contact_no = get_option('totalwpcare_maintenance_contact_no');
?>
<div class="wrap">
    <h1 class="wp-heading-inline">Settings</h1>
    <form method="post" action="">
    <div class="d-flex">
            <div class="tabs">
                <?php include('general-settings.php'); ?>
                <?php include('count-down.php'); ?>
                <?php include('social.php'); ?>
                <?php include('contact-info.php'); ?>
                <button class="button download-button button-large btn-primary" name="totalwpcare_setup_updated" type="submit" value="1">Save Settings</button>
            </div>
        
        <div class="advertisment__section">
        <style>
        .donate-btn{
            display: inline-block;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: bottom;
            border: 0;
            border-radius: .25rem;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.2), 0 2px 10px 0 rgba(0,0,0,.1);
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.2), 0 2px 10px 0 rgba(0,0,0,.1);
            font-weight: 500;
            padding: .625rem 1.5rem .5rem;
            font-size: .75rem;
            line-height: 1.5;
            color: #fff;
            background-color: #00b74a;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }
        .donate-btn:hover{
            color: #fff;
            background-color: #00913b;
            -webkit-box-shadow: 0 4px 10px 0 rgba(0,0,0,.2), 0 4px 20px 0 rgba(0,0,0,.1);
            box-shadow: 0 4px 10px 0 rgba(0,0,0,.2), 0 4px 20px 0 rgba(0,0,0,.1);
        }
        </style>
        <!--<div class="card">
            <h1 class="card-title">Title</h1>
            <p class="card-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est iusto dolor, officia facilis adipisci vel expedita iure quibusdam. Similique quo deserunt, quaerat reiciendis quod fugit veniam? Possimus ad qui ut?</p>
            <a class="donate-btn" href="">Donate</a>
        </div>-->
            <a class="ads-wrap" href="https://totalwpcare.com" target="_blank">
                <img src="<?php echo TOTALWPCARE_CS_PLUGIN_URL ?>assets/img/twc-ads.jpg"/>
            </a>
        </div>
        </form>
    </div>
</div>