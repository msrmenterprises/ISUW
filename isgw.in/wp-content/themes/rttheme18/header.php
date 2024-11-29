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
<meta property="og:image" content="http://www.isgw.in/wp-content/uploads/2018/09/Event-Structure-ISUW-2019.png" /> 

<?php echo stripcslashes(get_option(RT_THEMESLUG.'_space_for_head'));?>

<?php wp_head(); ?>

<script type="text/javascript" src="file.js"></script>
<style>
.reg-btn {
    background: #00923f none repeat scroll 0 0 !important;
}
a.fuse_social_icons_links i {
    background: #05839a !important;
}
</style>
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

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158702657-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'UA-158702657-1');

</script>

<!-- Global site tag (gtag.js) - Google Ads: 667271111 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-667271111"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-667271111');
</script>

<!-- Event snippet for Lead conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-667271111/IfuzCICar8QBEMf_lr4C',
      'event_callback': callback
  });
  return false;
}
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

		<div class="top_bar_container" style="width: 1085px !important;">    



<!-- 4 Bilateral Smart Grid Workshops | 4 Special Plenary Sessions and 2 Thematic Roundtables | 2200+ Delegates and 500+ Visitors | 431 Utility and Government Organisation Participants (Indian:  412 | Foreign: 19) | 80+ Utilities and Government Organisations | 245 Speakers | 43 Exhibitors | 28 Key Partners | 45 Supporting Organisations | 7 Supporting Ministries | 50 Media Participations | 60 Technical Papers (Published) | 80+ Technical Tour Participants | 600+ Master Class Participants | 185 International Delegates | 38 Countries | 181 Nominations for ISGF Innovation Awards (16 Categories, 110 Organisations) | 39 Award Winners-->
	<div style="float:left;margin-right:10px;margin-top:7px;"><h4><a href="#" style="color:#000;">Highlights of 2020</a></h4></div><div style="float:left"><marquee width="430"><h3 style="float:left;margin-top:5px;width: 65%;text-align: center;color:#000;font-weight:bold !important;">1570+ Participants |  9 Supporting Ministries|  26 Key Partners | 31Exhibitors| 42 Supporting Organisations  | 25 Supporting Media Partners | 21 Theme and Session Partners | 23 Countries | 264 Participants from Utilities | 13 Themes Sessions | 4 Special Plenary Sessions | 7 Parallel Events | 5 Bi-lateral Workshops | 269 Speakers from 20+ Countries | 50 Technical Papers Published | 200+ Delegates in 4 Tracks of Master Classes | 50 Delegates in 2 Technical Tours | 8 Award Categories of ISGF Innovation Awards | 127 Award Nominations from 84 Organisations | 27 Winners of ISGF Innovation Awards | 16 Certificate of Merit | 12110 Social Media Votes for Award Winners </h3></marquee>
<!--<br/>
<a href="http://www.isgw.in/votenow-isuw2020/" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/01/button8.png" style="width: 280px;height: 27px;"></a>-->
</div>
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


<!--li><center>Follow Us on: </center></li-->
<!--<li style="border: none;"><a href="http://www.isgw.in/votenow-isuw2020/" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/01/button8.png" style="width: 280px;height: 27px;"></a></li> -->
<li><center><a href="https://www.facebook.com/ISUW2020/" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/05/facebook-3.png" title="Facebook - @ISUW2019" width="100%" /></a></center></li>

<li><center><a href="https://twitter.com/ISUW2020" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/05/1493991917_square-twitter.png" title="Follow us on Twitter" width="100%"/></a></center></li>

<li><center><a href="https://www.linkedin.com/company/india-smart-grid-week/?viewAsMember=true" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/04/linkedin.png" title="India Smart Utility Week" width="24px"/></a></center></li>
<!--<li><center><a href="https://play.google.com/store/apps/details?id=com.indiasmartgrid.social " target="_blank"><img src="http://www.indiasmartgridweek.net/wp-content/uploads/2017/05/1493992106_social_media_online_android.png" title="Follow us on Android" width="100%"/></a></center></li>
<li><center><a href="https://itunes.apple.com/in/app/isgw-2018/id1349774875?mt=8" target="_blank"><img src="http://www.indiasmartgridweek.net/wp-content/uploads/2017/05/1493992178_social_media_online_apple.png" title="Follow us on IOS" width="100%"/></a></center></li>-->
<!--<li><center><a href="https://play.google.com/store/apps/details?id=com.indiasmartgrid.social " target="_blank"><img src="http://www.indiasmartgridweek.net/wp-content/uploads/2017/05/1493992106_social_media_online_android.png" title="Follow us on Android" width="100%"/></a></center></li>
<li><center><a href="https://itunes.apple.com/in/app/isgw-2018/id1349774875?mt=8" target="_blank"><img src="http://www.indiasmartgridweek.net/wp-content/uploads/2017/05/1493992178_social_media_online_apple.png" title="Follow us on IOS" width="100%"/></a></center></li>-->
<li><center><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/05/1493992067_social_style_3_youtube.png" title="Follow us on Youtube" width="100%"/></a></center></li>
<li><center><a href="https://www.flickr.com/photos/indiasmartgridforum/" target="_blank"><img src="http://indiasmartgrid.org/img/flickr1600.png" title="Follow us on Flickr" style="width:26px;height:26px;"/></a></center></li>

<!--<li><center><a href="https://play.google.com/store/apps/details?id=com.hubilo.isuw2019" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/02/android.png" title="Download on Play Store" style="height:26px;"/></a></center></li>
<li><center><a href="https://itunes.apple.com/in/app/isuw-2019/id1450801435?mt=8" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/02/apple.png" title="Download on App Store" style="height:26px;"/></a></center></li> -->

<li><a href="http://www.isgw.in/isuw-registration-2021/" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/09/Register_Now_Button.png" style="width:126px;"></a></li>
<!--li style="
    border: none;
"><a href="http://isgw.in/votenow" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/01/button8.png" style="width: 280px;height: 27px;"></a></li-->	

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



<?php if ( is_page( 'home-2020' )) echo do_shortcode('[layerslider id="13"]'); ?>								