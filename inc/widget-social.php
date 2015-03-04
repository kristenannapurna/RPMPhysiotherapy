<?php 
/**
 * Creates a custom widget 
 * 
 * (This file goes in a WordPress theme and is included into functions.php)
 * 
 */
class starter_theme_custom_widget extends WP_Widget {

	// Register widget with WordPress.

	public function __construct() {
		parent::__construct(
	 		'starter-theme-custom-widget', // Base ID
			'RPM Social Widget', // Name
			array( 'description' => __( 'This is a special custom widget', 'starter-theme' ), ) // Args
		);
	}


	// Front-end display of widget.

	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title; ?>
		
			<!-- ALL CONTENT WITHIN THE WIDGET GOES HERE -->

			<div class="socialWidget">
				<h2>Connect With Us</h2>

					<div class="icons clearfix">
						<div class="icon"><a href="https://www.facebook.com/rpmphysiotherapy" target="_blank">
								<i class="fa fa-facebook"></i>
								<h3>Facebook</h3>
							</a></div>
						<div class="icon"><a href="https://twitter.com/RPMPhysio" target="_blank">
								<i class="fa fa-twitter"></i>
								<h3>Twitter</h3>
							</a></div>
						<div class="icon"><a href="https://instagram.com/rpmphysio" target="_blank">
								<i class="fa fa-instagram"></i>
								<h3>Instagram</h3>
							</a></div>
						<div class="icon"><a href="mailto:physiotherapy@rpmstudio.ca">
								<i class="fa fa-envelope"></i>
								<h3>Email</h3>
							</a></div>
					</div>
			</div>
		
		<?php echo $after_widget;
	}


	// Sanitize widget title on save

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}


	// Admin widget form (for title field)

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}

}

// register our custom widget
add_action( 'widgets_init', 
	create_function( '', 'register_widget( "starter_theme_custom_widget" );' ) 
); ?>