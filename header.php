<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Parallaxme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigator">
<?php esc_html_e( 'Skip to content', 'skt-parallaxme' ); ?>
</a>
<?php
	$header_trans = esc_html(get_theme_mod('option_header_transparent', 1));
	$header_trans_inner = esc_html(get_theme_mod('option_inner_header_transparent', 1));
	$showpagebanner = esc_html(get_theme_mod('inner_page_banner_option', 1));
	$showpostbanner = esc_html(get_theme_mod('inner_post_banner_option', 1));
	$pagethumb = esc_html(get_theme_mod('inner_page_banner_thumb'));
	$postthumb = esc_html(get_theme_mod('inner_post_banner_thumb'));
	
	$header_headerbtn = esc_html(get_theme_mod('header_headerbtn'));
	$header_headerbtn_link = esc_html(get_theme_mod('header_headerbtn_link'));
	
	$hideheaderbtn = esc_html(get_theme_mod('hide_header_button', 1));
?>
<div id="main-set">
<div class="header <?php if( !is_home() && is_front_page() && $header_trans == '') {echo esc_html('transheader');}elseif(!is_home() && !is_front_page() && $header_trans_inner == '') {echo esc_html('transheader');}?>">
	<div class="container">
    <div class="logo-shape"></div>    
    <div class="head-area">
    <div class="logo">
		<?php skt_parallaxme_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <div id="logo-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
        </div>
    </div> 
    <div class="heder-rightside">
    <div id="navigation"><nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>
		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) ); ?>
			</nav></div>

            <?php if( $hideheaderbtn == '') { ?>
            <div class="header-right-infos">
                <?php if (!empty($header_headerbtn_link)) { ?><a href="<?php echo esc_url($header_headerbtn_link);?>"><?php } ?>
                <div class="header-phone-number">
                    <?php if (!empty($header_headerbtn)) { ?>
                        <?php echo esc_html($header_headerbtn); ?>
                    <?php }?>
                </div>
                <?php if (!empty($header_headerbtn_link)) { ?></a><?php } ?>
                 <div class="clear"></div>
            </div>
            <?php } ?> 

    </div>
    </div>
        <div class="clear"></div>
        </div> <!-- container -->     
  </div>
  <div class="clear"></div> 
  
  </div><!--main-set-->
  <div class="clear"></div>   