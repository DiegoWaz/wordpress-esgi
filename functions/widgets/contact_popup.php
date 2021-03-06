<?php
/**
 * Adds Contact_Popup_Widget widget.
 */
class Contact_Popup_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'contact_popup', // Base ID
			esc_html__( 'Popup Contact', 'FoodByNight' ), // Name
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
		if ( ! empty( $instance['content'] ) ) {
			?>
				<p><?= apply_filters( 'widget_content', $instance['content'] ); ?></p>
			<?php			
		}
		if ( ! empty( $instance['phone'] ) ) {
			?>
				<p><?= apply_filters( 'widget_phone', $instance['phone'] ); ?></p>
			<?php
		}
		if ( ! empty( $instance['email'] ) ) {
			?>
				<a href="<?= apply_filters( 'widget_email', $instance['email'] ); ?>"><?= esc_attr_e( 'Nous contacter par email', 'FoodByNight' ); ?></a>
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
		$content = ! empty( $instance['content'] ) ? $instance['content'] : esc_html__( 'New content', 'FoodByNight' );
		$phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( 'New phone', 'FoodByNight' );
		$email = ! empty( $instance['email'] ) ? $instance['email'] : esc_html__( 'New email', 'FoodByNight' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_attr_e( 'Content:', 'FoodByNight' ); ?></label> 
		<textarea  class="widefat" id="<?= esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?= esc_attr( $this->get_field_name( 'content' ) ); ?>" rows="16" cols="20"><?= esc_attr( $content ); ?></textarea>
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"><?php esc_attr_e( 'phone:', 'FoodByNight' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_attr_e( 'email:', 'FoodByNight' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
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
		$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';

		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';

		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';

		return $instance;
	}

} // class Contact_Popup_Widget