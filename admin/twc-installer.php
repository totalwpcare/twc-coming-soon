<?php
global $wpdb;
$twc_themes = array(
    array(
      'post_title'    => 'TWC 2020',
      'post_content'  => 'Coming soon theme for your theme. This is a default theme provided by TotalWPCare',
      'post_status'   => 'publish',
      'post_type'      => 'twc_cs_theme',
      'post_name' => 'twc-2020',
      'post_author'   => 1
    ),
    array(
      'post_title'    => 'TWC Application Launch',
      'post_content'  => 'Coming Soon Theme for your Application Launch.',
      'post_status'   => 'publish',
      'post_type'      => 'twc_cs_theme',
      'post_name' => 'twc-app',
      'post_author'   => 1
    ),
    array(
      'post_title'    => 'TWC Coming Event',
      'post_content'  => 'Coming Soon Theme for Event Management Website',
      'post_status'   => 'publish',
      'post_type'      => 'twc_cs_theme',
      'post_name' => 'twc-event',
      'post_author'   => 1
    ),
    array(
      'post_title'    => 'TWC Blogger',
      'post_content'  => 'Coming Soon Theme for your Blog Launch',
      'post_status'   => 'publish',
      'post_type'      => 'twc_cs_theme',
      'post_name' => 'twc-blog',
      'post_author'   => 1
    )
);

$twc_theme_meta = array(
    array(
        'twc_cs_live_preview_link' => 'https://totalwpcare.com'
    ),
    array(
        'twc_cs_live_preview_link' => 'https://totalwpcare.com'
    ),
    array(
        'twc_cs_live_preview_link' => 'https://totalwpcare.com'
    ),
    array(
        'twc_cs_live_preview_link' => 'https://totalwpcare.com'
    )
);

foreach($twc_themes as $key => $twc_theme)
{
    if (!get_page_by_title($twc_theme['post_title'], OBJECT, 'twc_cs_theme'))
    {
         $PostID = wp_insert_post($twc_theme);
        update_post_meta($PostID, 'twc_cs_screenshot', $twc_theme_meta[$key]['twc_cs_screenshot']);
        update_post_meta($PostID, 'twc_cs_live_preview_link', $twc_theme_meta[$key]['twc_cs_live_preview_link']);
    }
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

    if(empty($twc_maintenance_mode_active))
    {
        update_option('totalwpcare_maintenance_mode', 0);
    }

    if(empty($totalwpcare_maintenance_active_theme))
    {
        update_option('totalwpcare_maintenance_active_theme', 'twc-2020');
    }

    if(empty($totalwpcare_maintenance_website_logo))
    {
        update_option('totalwpcare_maintenance_website_logo', '');
    }

    if(empty($totalwpcare_maintenance_display_website_logo))
    {
        update_option('totalwpcare_maintenance_display_website_logo', 0);
    }
    
    if(empty($totalwpcare_maintenance_headline))
    {
        update_option('totalwpcare_maintenance_headline', 'We are coming Soon!!');
    }

    if(empty($totalwpcare_maintenance_description))
    {
        update_option('totalwpcare_maintenance_description', 'We are coming Soon with some powerful features.');
    }

    if(empty($totalwpcare_maintenance_countdown))
    {
        update_option('totalwpcare_maintenance_countdown', 0);
    }

    if(empty($totalwpcare_maintenance_countdown_end_date))
    {
        update_option('totalwpcare_maintenance_countdown_end_date', '');
    }

    if(empty($totalwpcare_maintenance_social_facebook))
    {
        update_option('totalwpcare_maintenance_social_facebook', 'https://facebook.com/');
    }

    if(empty($totalwpcare_maintenance_social_linkedin))
    {
        update_option('totalwpcare_maintenance_social_linkedin', 'https://linkedin.com/');
    }

    if(empty($totalwpcare_maintenance_social_twitter))
    {
        update_option('totalwpcare_maintenance_social_twitter', 'https://twitter.com/');
    }

    if(empty($totalwpcare_maintenance_social_instagram))
    {
        update_option('totalwpcare_maintenance_social_instagram', 'https://www.instagram.com/');
    }

    if(empty($totalwpcare_maintenance_contact_address))
    {
        update_option('totalwpcare_maintenance_contact_address', 'EC-24, Scheme No.-94, Near Bombay Hospital, Ring Road Indore-452001');
    }

    if(empty($totalwpcare_maintenance_contact_email))
    {
        $admin_email = get_option( 'admin_email' );
        update_option('totalwpcare_maintenance_contact_email', $admin_email);
    }

    if(empty($totalwpcare_maintenance_contact_no))
    {
        update_option('totalwpcare_maintenance_contact_no', '+91-8358995599');
    }
?>