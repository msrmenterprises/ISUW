				<?php do_action( 'rt_content_after'); ?>			

	

				</div><!-- / end div .content_area -->  

<?php if(is_front_page()){ ?>  


	 <div class="clock">
	    <!-- <h2 style="
    color: #fff;
">Download ISUW 2019 Mobile App</h2>
<p style="text-align:center"><a href="https://play.google.com/store/apps/details?id=com.hubilo.isuw2019" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/02/android.png" title="Download on Play Store" style="height:36px;"></a> &nbsp;&nbsp;&nbsp;&nbsp;  <a href="https://itunes.apple.com/in/app/isuw-2019/id1450801435?mt=8" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2019/02/apple.png" title="Download on App Store" style="height:36px;"></a></p>-->
	
	     
	  <h1 style="text-align:center;font-size: 40px;color:#FFF;margin-bottom:62px;">Countdown to #ISUW2021</h1>
		<p id="days" class="countdown"></p>
		<p id="hours" class="countdown"></p>
		<p id="minutes" class="countdown"></p>
		<p id="seconds" class="countdown"></p>
	</div>

<div id="vidtop-content">
<div class="vid-info">
	
  </div>
</div>
<!--<div class="video-background">
    <div class="video-foreground">
    	<iframe height="500" src="https://www.youtube.com/embed/abFLRec1ZkM?controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
     
    </div>
  </div>-->

<?php } ?>
<div class="register-now"><a href="http://www.isgw.in/isuw-registration-2021/" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/09/Register_Now_Button.png" style="width:15%;"></a></div>
<div class="clearfix"></div>

				<?php 

					#

					# footer output

					# get templates footer content outputs

					# @hooked in /rt-framework/functions/theme_functions.php

					#				

					do_action( 'rt_footer_output');					

				?>

	        </div><!-- / end div .content_second_background -->  

	    </div><!-- / end div .content_holder -->  

	</div><!-- end div #container --> 



    <!-- footer -->

    <footer id="footer">

	<style>
	.clock .fig{
		
		
		font-size:65px;
	}
	.register-now {
       background: rgb(39, 50, 56) none repeat scroll 0 0;
       margin: 0 auto;
       padding: 25px 20px 0 0;
       text-align: center;
    }
	p.countdown {
	    text-align: center;
	    font-size: 50px;
	    margin: 0 55px;
	    
	    padding: 20px 15px;
	    display: inline-block;
	    color: #FFF;
	    /* font-family: typewriter; */
	    font-family: 'PT Sans Narrow',sans-serif;
	    
	    letter-spacing: 6px;
		width: 10%;

	}

	p.countdown span{
	 font-size:25px;
	
	}
.clock {
    text-align: center;
     background: url(http://www.isgw.in/wp-content/uploads/2018/12/backgroundimage.jpg);
    background-size: cover;
    padding: 2% 10% 2% 10%;
	background-repeat:no-repeat;
}
	#vidtop-content {
	    position: absolute;
	    z-index: 9;
	    width: 100%;
	}
	.video-foreground iframe{
		width: 100%;
	}
	#vidtop-content h1{
		color: #fff;
	    font-size: 54px;
	    padding-top: 10%;
	    text-align: center;
	}
	.footer .featured_article_title {
	    font-size: 21px;
	    color: #21a83f !important;
	}
	.testimonial_rotator_slide_title{
	  font-size:17px !important;
	}
	</style>
   

<script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 02, 2021 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("days").innerHTML = "<span class='fig'>"+ days +"</span>" + "<br/><br/><span>DAYS</span> ";
	document.getElementById("hours").innerHTML = "<span class='fig'>" + hours + "</span>" + "<br/><br/><span>HOURS </span>";
	document.getElementById("minutes").innerHTML = "<span class='fig'>" + minutes + "</span>" + "<br/><br/><span>MINUTES</span> ";
	document.getElementById("seconds").innerHTML = "<span class='fig'>" + seconds + "</span>" + "<br/><br/><span>SECONDS</span> ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

        <!-- footer info -->

        <div class="footer_info">       

                

            <!-- left side -->

            <div class="part1">

					<!-- footer nav -->

					<?php if ( has_nav_menu( 'rt-theme-footer-navigation' ) ): // check if user created a custom menu and assinged to the rt-theme's location ?>

					    <?php  

						    //call the footer menu

						    $footermenuVars = array(							  

							   'depth'		 => 1,

							   'menu_id'         => 'footer_links',

							   'menu_class'      => 'footer_links', 

							   'echo'            => false,

							   'container'       => '', 

							   'container_class' => '', 

							   'container_id'    => '',

							   'theme_location'  => 'rt-theme-footer-navigation' 

						    );

						    

						    $footer_menu=wp_nav_menu($footermenuVars);

						    echo $footer_menu;

					    ?>

				    <?php else:?>

					    <?php  

						    //call the footer menu

						    $footermenuVars = array(

						       'menu'            => 'RT Theme Footer Navigation Menu', 

							   'depth'		 	 => 1,

							   'menu_id'         => 'footer_links',

							   'menu_class'      => 'footer_links', 

							   'echo'            => false,

							   'container'       => '', 

							   'container_class' => '', 

							   'container_id'    => '',

							   'theme_location'  => 'rt-theme-footer-navigation' 

						    );

						    

						    $footer_menu=wp_nav_menu($footermenuVars);

						    echo $footer_menu;

					    ?>

			  			<!-- / end ul .footer_links -->

		  			<?php endif;?>



					<!-- copyright text -->

					<div class="copyright"><?php echo do_shortcode(rt_wpml_t(RT_THEMESLUG, 'Footer Copyright Text', get_option(RT_THEMESLUG.'_footer_copy')));?>

					</div><!-- / end div .copyright -->	            

                

            </div><!-- / end div .part1 -->

            

			<!-- social media icons -->				

			<?php 

			//social media icons

			if(get_option(RT_THEMESLUG.'_social_media_bottom')){

				echo do_shortcode("[rt_social_media_icons]");

			}

			?><!-- / end ul .social_media_icons -->



        </div><!-- / end div .footer_info -->

            

    </footer>

    <!-- / footer -->





<?php echo get_option( RT_THEMESLUG.'_google_analytics');?>  

<?php echo stripcslashes(get_option(RT_THEMESLUG.'_space_for_footer'));?>



<?php wp_footer(); ?>

</body>

</html>