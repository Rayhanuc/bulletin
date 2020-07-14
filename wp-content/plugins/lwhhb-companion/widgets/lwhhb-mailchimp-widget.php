<?php
// Adds widget: lwhhb Newsletter
class Lwhhbnewsletter_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'lwhhbnewsletter_widget',
			esc_html__( 'Bulletin Newsletter', 'textdomain' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Message',
			'id' => 'lwhhb_nl_message',
			'default' => 'Sign up and receive our newsletters',
			'type' => 'text',
		),
		array(
			'label' => 'Form Submission URL',
			'id' => 'lwhhb_nl_url',
			'type' => 'url',
		),
		array(
			'label' => 'Button Label',
			'id' => 'lwhhb_nl_button',
			'type' => 'text',

		),
	);

	public function widget( $args, $instance ) {
		echo "<div class='widget-subscribe'>";
		echo wp_kses_post($args['before_widget']);

		if ( ! empty( $instance['title'] ) ) {
			echo '<h6>' . apply_filters( 'widget_title', $instance['title'] ) . '</h6>';
		}

		?>
		<p class="text-muted">
			<?php echo esc_html($instance['lwhhb_nl_message']); ?>
		</p>

		<form target="_blank" action="<?php echo esc_url($instance['lwhhb_nl_url']); ?>" method="post">
			<input type="text" name="EMAIL" class="form-control mb-3"/>
			<button class="btn btn-default btn-block"><?php echo esc_html($instance['lwhhb_nl_button']); ?></button>
		</form>
		<?php

		echo wp_kses_post($args['after_widget']);
		echo "</div>";
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'textdomain' );
			switch ( $widget_field['type'] ) {
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'textdomain' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'textdomain' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'textdomain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_lwhhbnewsletter_widget() {
	register_widget( 'lwhhbnewsletter_Widget' );
}
add_action( 'widgets_init', 'register_lwhhbnewsletter_widget' );