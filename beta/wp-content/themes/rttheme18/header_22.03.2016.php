<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

<head> 

<meta charset="<?php bloginfo( 'charset' ); ?>" />  

<?php if(get_option( RT_THEMESLUG."_close_responsive")):?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><?php endif;?>

<?php if (get_option( RT_THEMESLUG.'_favicon_url')):?><link rel="icon" type="image/png" href="<?php echo get_option( RT_THEMESLUG.'_favicon_url');?>"><?php endif;?>

<link rel="icon" type="image/png" href="http://isgw.in/img/favicon.ico">

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php echo stripcslashes(get_option(RT_THEMESLUG.'_space_for_head'));?>

<?php wp_head(); ?>

<script type="text/javascript" src="file.js"></script>

</head>

<body <?php body_class(); ?>>

<?php do_action("rt_after_body"); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74721880-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- background wrapper -->

<div id="container">   





	<!-- mobile actions -->

	<section id="mobile_bar" class="clearfix">

		<div class="mobile_menu_control icon-menu"></div>

		<?php if( ! get_option(RT_THEMESLUG.'_hide_top_bar') ):?><div class="top_bar_control icon-cog"></div><?php endif;?>    

	</section>

	<!-- / end section #mobile_bar -->    



	<?php if( ! get_option(RT_THEMESLUG.'_hide_top_bar') ):?>

	<!-- top bar -->

	<section id="top_bar" class="clearfix">

		<div class="top_bar_container">    




	<h2 style="float:left;margin-top:5px;width: 65%;text-align: center;color:#CD5C5C;font-weight:bold !important;">REGISTRATION CLOSED - EVENT COMPLETELY SOLD OUT</h2> 
					<ul id="top_navigation" class="top_links">



						<!--  top links -->

						<?php if ( has_nav_menu( 'rt-theme-top-navigation' ) ): // check if user created a custom menu and assinged to the rt-theme's location ?>

							<?php  

								//call the top menu			 

								$topmenuVars = array(

									'menu_id'         => "", 

									'menu_class'      => "top_links", 

									'container'       => '', 

									'echo'            => true, 

									'depth'		 	  => 1, 

									'theme_location'  => 'rt-theme-top-navigation',

									'items_wrap'      => '%3$s', 

								); 

								

							  	wp_nav_menu($topmenuVars);

						    ?>

					    <?php else:?>

						    <?php    



						    	//call the top menu			 

								$topmenuVars = array(

									'menu'            => 'RT Theme Top Navigation Menu',  

									'menu_id'         => "top_navigation", 

									'menu_class'      => "top_links", 

									'container'       => '', 

									'echo'            => true, 

									'depth'		 	  => 1, 

									'theme_location'  => 'rt-theme-top-navigation',

									'items_wrap'      => '%3$s', 

								); 



							  	wp_nav_menu($topmenuVars);

						    ?>

				  			<!-- / end ul .top_links --> 

			  			<?php endif;?>          





						<?php if(!get_option(RT_THEMESLUG.'_hide_woo_cart') && class_exists( 'Woocommerce' )):?>

							<?php global $woocommerce; ?>

												

							<?php if ( is_user_logged_in() ) { ?>

								

							<?php } ?>						  			



											

						<?php endif;?>





						<?php if( get_option( RT_THEMESLUG."_show_search_top" ) ):?>

							<li><form action="<?php echo rt_wpml_get_home_url(); ?>/" method="get" class="showtextback" id="top_search_form"><span class="icon-search"></span><span><input type="text" class="search_text showtextback" size="1" name="s" id="top_search_field" value="<?php _e('Search','rt_theme');?>" /></span></form></li>

						<?php endif;?>





						<?php if(get_option(RT_THEMESLUG.'_show_flags') && function_exists('icl_get_languages')):?>

						    <?php rt_wpml_languages_list();?>		  

						<?php endif;?>



						<?php 

							//adds additional links to the top links - format <li><a></a></li>

							do_action("add_top_menu_links");

						?>


<li><center>Follow Us on: </center></li>
<li><center><a href="https://www.facebook.com/indiasmartgridweek" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2015/10/facebook1.png" title="Follow us on FB" width="50%" /></a></center></li>

<li><center><a href="https://twitter.com/ISGW2016" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2015/10/twitter1.png" title="Follow us on Twitter" width="50%"/></a></center></li>

<li><center><a href="https://in.linkedin.com/in/indiasmartgridweek" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2015/10/linkedin1.png" title="Follow us on Linkedin" width="50%"/></a></center></li>



					</ul>





					<?php 

					if( get_option(RT_THEMESLUG.'_social_media_top') ){

						echo do_shortcode("[rt_social_media_icons]");

					}   

					?>





		</div><!-- / end div .top_bar_container -->    

	</section><!-- / end section #top_bar -->    

	<?php endif;?>    





	<?php 

		#

		# get header design  

		global $rt_header_layout_options;



		if( $rt_header_layout_options["header_design"] == "design2" ){

			get_template_part("header","design2");

		}else{

			get_template_part("header","design1");

		}

	?>	







		<!-- content holder --> 

		<div class="content_holder">



		<?php 

			#

			# get info bar (breadcrumb and page title )	  

			# get templates haeder bar outputs

			# @hooked in /rt-framework/functions/theme_functions.php

			#				

			//do_action( 'rt_header_bar_output');					

		?>		

			<div class="content_second_background">

				<div class="content_area clearfix"> 

		



				<?php do_action( 'rt_content_before'); 

?>	



<?php if ( is_page( 'home-temp' )) echo do_shortcode('[layerslider id="8"]'); ?>								