<?php	
add_action( 'widgets_init', 'hotel_melbourne_widgets');
function hotel_melbourne_widgets() {

register_sidebar( array(
		'name' => __( 'Sidebar Data', 'hotel-melbourne' ),
		'id' => 'sidebar-data',
		'description' => __( 'The primary widget area', 'hotel-melbourne' ),
		'before_widget' => '<div class="clearfix"></div><div class="widget" data-aos="fade-up"  data-aos-duration="1500">
		<ul class="post-content ">',
		'after_widget' => '</ul></div>',
		'before_title' => '<div class="sm-widget-title"><h2>',
		'after_title' => '</h2></div>',
	) );

register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'hotel-melbourne' ),
		'id' => 'footer-widget-area',
		'description' => __( 'footer widget area', 'hotel-melbourne' ),
		'before_widget' => '<div class="col-sm-3">
			<div class="links">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	) );
	
}	                     
?>