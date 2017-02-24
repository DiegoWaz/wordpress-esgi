<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
/*

/**
 * Adds Social_Link_Widget widget.
 */
class Social_Link_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'social_link', // Base ID
			esc_html__( 'Réseaux Sociaux', 'FoodByNight' ), // Name
			array( 'description' => esc_html__( 'Lien des réseaux sociaux', 'FoodByNight' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		/*if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}*/

		if ( ! empty( $instance['facebook'] ) ) {
			?>
				<li>             
                	<a href="<?= apply_filters( 'widget_facebook', $instance['facebook'] ); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
			<?php
		}
		if ( ! empty( $instance['twitter'] ) ) {
			?>
				<li>             
                	<a href="<?= apply_filters( 'widget_twitter', $instance['twitter'] ); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                </li>
			<?php
		}

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : esc_html__( 'New facebook', 'FoodByNight' );
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : esc_html__( 'New twitter', 'FoodByNight' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_attr_e( 'Facebook:', 'FoodByNight' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_attr_e( 'Twitter:', 'FoodByNight' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';

		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';

		return $instance;
	}

} // class Social_Link_Widget