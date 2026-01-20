<?php
//about theme info
add_action( 'admin_menu', 'skt_parallaxme_abouttheme' );
function skt_parallaxme_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-parallaxme'), esc_html__('About Theme', 'skt-parallaxme'), 'edit_theme_options', 'skt_parallaxme_guide', 'skt_parallaxme_mostrar_guide');   
} 
//guidline for about theme
function skt_parallaxme_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-parallaxme'); ?>
		   </div>
          <p><?php esc_html_e('SKT Parallax Me is a beautifully crafted parallax one page WordPress theme. It has got a nice parallax slider, ability to add upto 10 sections on single one page home. One may add custom menu navigation as well as drop down menus into this one page. This theme is best suited for corporates, business sites, photo bloggers, portfolio, freelancers as well as personal sites.','skt-parallaxme'); ?></p>
          <a href="<?php echo esc_url(SKT_PARALLAXME_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_PARALLAXME_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-parallaxme'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PARALLAXME_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-parallaxme'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PARALLAXME_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-parallaxme'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_PARALLAXME_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>