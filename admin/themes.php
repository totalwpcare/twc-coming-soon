<?php
$all_twc_themes = get_posts([
  'post_type' => 'twc_cs_theme',
  'post_status' => 'publish',
  'numberposts' => -1,
   'order'    => 'ASC'
]);
?>
<style>
    .theme-browser .themes {
    display: flex;
    flex-wrap: wrap;
}
.theme-browser .theme{
    background:white;
}
.theme-browser .theme .theme-screenshot img {
  
    bottom: 0px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
    .theme-browser .theme .theme-description {
    font-size: 13px;
    font-weight: 400;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    height:20px;
    margin: 0;
    padding: 15px 15px;
    background: #fff;
    background: rgba(255,255,255,.65);
}
.theme-browser .theme.active  .theme-description{
    padding: 15px 15px;
}
.theme-actions-btn{
    margin: 0;
    padding: 0px 15px 15px;
    background: #fff;
    background: rgba(255,255,255,.65);
}
.theme-browser .theme.add-new-theme a {
    height: 100%;
}
.theme-browser .theme.add-new-theme .theme-name {
   font-size:15px;
    font-weight: 600;
    top: 0;
    margin-top: -18px;
    padding-top: 0;
    padding-bottom: 48px;
}
</style>
<div class="wrap">
    <h1 class="wp-heading-inline">Themes</h1>
    <div class="theme-browser rendered">
        <div class="themes wp-clearfix">
            <?php $totalwpcare_maintenance_active_theme = get_option('totalwpcare_maintenance_active_theme');
            $totalwpcare_maintenance_active_theme = !empty($totalwpcare_maintenance_active_theme) ? $totalwpcare_maintenance_active_theme : 'twc-2020';
            ?>
            <?php foreach($all_twc_themes as $twc_theme): ?>
                <?php if(file_exists(TOTALWPCARE_CS_PLUGIN_DIR.'themes/'.$twc_theme->post_name.'/screenshot.png')) {
                    $screenshot_url = TOTALWPCARE_CS_PLUGIN_URL.'themes/'.$twc_theme->post_name.'/screenshot.png';
                } else if(file_exists(TOTALWPCARE_CS_PLUGIN_DIR.'themes/'.$twc_theme->post_name.'/screenshot.jpg')) {
                    $screenshot_url = TOTALWPCARE_CS_PLUGIN_URL.'themes/'.$twc_theme->post_name.'/screenshot.jpg'; 
                } else if(file_exists(TOTALWPCARE_CS_PLUGIN_DIR.'themes/'.$twc_theme->post_name.'/screenshot.jpeg')) {
                    $screenshot_url = TOTALWPCARE_CS_PLUGIN_URL.'themes/'.$twc_theme->post_name.'/screenshot.jpeg';
                }  else if(file_exists(TOTALWPCARE_CS_PLUGIN_DIR.'themes/'.$twc_theme->post_name.'/screenshot.gif')) {
                    $screenshot_url = TOTALWPCARE_CS_PLUGIN_URL.'themes/'.$twc_theme->post_name.'/screenshot.gif';
                } else {
                    $screenshot_url = TOTALWPCARE_CS_PLUGIN_URL.'assets/img/default-theme.gif';
                } ?>
                <?php $twc_cs_live_preview_link = get_post_meta($twc_theme->ID, 'twc_cs_live_preview_link', true);
                $twc_cs_live_preview_link = !empty($twc_cs_live_preview_link) ? $twc_cs_live_preview_link : "https://totalwpcare.com" ?>
            <div class="theme <?php echo ($totalwpcare_maintenance_active_theme == $twc_theme->post_name) ? 'active' : '' ?>" tabindex="0">
                <div class="theme-screenshot">
                    <img src="<?php echo $screenshot_url ?>" alt="">
                </div>
                <!-- <span class="more-details"><?php echo $twc_theme->post_content ?></span>
                <div class="theme-author">
                    By TotalWPCare Team </div> -->
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        <span> <?php echo ($totalwpcare_maintenance_active_theme == $twc_theme->post_name) ? 'Active:' : '' ?></span> <?php echo $twc_theme->post_title ?> </h2>
                        <p class="theme-description"><?php echo $twc_theme->post_content ?></p>
                        <p class="theme-author">By TotalWPCare Team </p>
                    <div class="theme-actions-btn">
                        <?php if($totalwpcare_maintenance_active_theme == $twc_theme->post_name) : ?>
                        <a class="button button-primary customize load-customize hide-if-no-customize"
                            href="<?php echo get_site_url() ?>?twc_cs_live_preview=<?php echo $twc_theme->post_name ?>" target="_blank">Live Preview</a>
                        <?php else: ?>
                        <a class="button activate"
                            href="?page=totalwpcare_cs-themes&twc_theme_activate=<?php echo $twc_theme->post_name ?>"
                            aria-label="Activate">Activate</a>
                        <a class="button button-primary load-customize hide-if-no-customize"
                            href="<?php echo $twc_cs_live_preview_link ?>" target="_blank">Preview</a>
                        <a class="button button-primary load-customize hide-if-no-customize"
                            href="<?php echo get_site_url() ?>?twc_cs_live_preview=<?php echo $twc_theme->post_name ?>" target="_blank">Live Preview</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
            
            <div class="theme add-new-theme"><a href="https://totalwpcare.com" target="_blank">
                    <div class="theme-screenshot"><span></span></div>
                    <h2 class="theme-name">Get New Theme</h2>
                </a></div>
        </div>
    </div>
</div>