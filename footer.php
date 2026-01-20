<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Parallaxme
 */

$footer_text = get_theme_mod('footer_text'); 
$footerheading = get_theme_mod('footer_follow_heading');

$fb_link = get_theme_mod('fb_link'); 
$twitt_link = get_theme_mod('twitt_link');
$linked_link = get_theme_mod('linked_link');
$insta_link = get_theme_mod('insta_link');
$hidefooterbox = get_theme_mod('hide_footer_bar', 1);
?>
<div id="footer">
<?php if( $hidefooterbox == '') { ?>
<div class="footer-infobox">
<div id="footer-wrapper" class="ft-infobox">
		<div class="footerarea">
            <div class="container footerinfobox">
                <?php 
				if (!empty($footerheading)) { ?>
                 <h3><?php echo esc_html($footerheading); ?></h3>
                 <?php } ?>
                <div class="footer-social">           
                <div class="social-icons">
                    <?php 
                    if (!empty($fb_link)) { ?>
                    <a title="<?php echo esc_attr__('Facebook','skt-parallaxme'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
                    <?php } 		
                    if (!empty($twitt_link)) { ?>
                    <a title="<?php echo esc_attr__('Twitter','skt-parallaxme'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
                    <?php } 
                     if (!empty($linked_link)) { ?> 
                    <a title="<?php echo esc_attr__('Linkedin','skt-parallaxme'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
                    <?php } ?> 
                    <?php
                    if (!empty($insta_link)) { ?> 
                    <a title="<?php echo esc_attr__('Instagram','skt-parallaxme'); ?>" class="insta" target="_blank" href="<?php echo esc_url($insta_link); ?>"></a>
                    <?php } ?>                   
                  </div>
                  </div> 
                <div class="clear"></div>
            </div>
        </div>
</div>
</div>
<?php } ?>
<div class="copyright-area">
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php if (!empty($footer_text)) { ?>
	 		<?php echo esc_html($footer_text); ?>
		<?php } ?>
        <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','skt-parallaxme');?> <a href="<?php echo esc_url('https://www.sktthemes.org/product-category/one-page-wordpress-themes/');?>" target="_blank"><?php esc_html_e('SKT One Page Themes','skt-parallaxme'); ?></a>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
</div>
<?php wp_footer(); ?>
</body>
</html>