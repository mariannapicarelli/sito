<?php
$melbourne_options=hotel_melbourne_theme_default_data(); 
$home_latest_post_option = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
if($home_latest_post_option['home_blog_enabled'] == 1 ) { ?>
<section class="home-blog-section" data-aos="fade-up"  data-aos-duration="500">
    <div class="container">
		<div class="row">
	      <div class="col-md-12 section-title">
			    <h1><?php echo $home_latest_post_option['blog_heading_title'];?></h1>
				<p><?php echo $home_latest_post_option['blog_description'];?></p>
		  </div>
	     </div>
        <div class="clearfix"></div>
	  <?php get_template_part('blog','content'); ?>			
    </div>
</section>
<?php } ?>