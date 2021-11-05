<?php

class Meow_Addons_Contact_Form_Phone_Field {

	public $core = null;

	public function __construct( $core ) {
    $this->core = $core;
    add_filter( 'mcfb_form_after_email', array( $this, 'after_email' ), 4, 10 );
    add_filter( 'mcfb_form_read_data', array( $this, 'form' ), 1, 10 );
    add_filter( 'mcfb_email_content', array( $this, 'email_content' ), 2, 10 );
		add_filter( 'mcfb_fill_template', array( $this, 'fill_template' ), 2, 10 );
	}

  // Add the phone field after the e-mail field
	function after_email( $html, $atts, $css, $reply ) {
    $disabled = ( $reply && $reply->success ) ? 'disabled' : '';
    $phone_label = isset( $atts['phone_label'] ) ? esc_html( $atts['phone_label'] ) : __( 'Phone', 'contact-form-block' );
		$html .= "<div class='{$css['group']}'>";
		$html .= "<label class='{$css['label']}' for='mcfb_phone'>$phone_label</label>";
		$html .= "<input class='{$css['input']}' type='text' name='mcfb_phone' id='mcfb_phone' value='" . 
			( isset( $reply->form->phone ) ? esc_html( $reply->form->phone ) : '' ) . "' $disabled></input>";
    $html .= "</div>";
    return $html;
  }
  
  // Get the value from the form
  function form( $form ) {
    $form['phone'] = sanitize_text_field( $_POST['mcfb_phone'] );
    return $form;
  }

  // Add the phone in the template right after the e-mail
  function email_content( $content, $form ) {
    return str_replace( "E-mail: *email*", "E-mail: *email*\r\nPhone: *phone*", $content );
  }

  // Add the phone in the template right after the e-mail
  function fill_template( $content, $form ) {
    return str_replace( '*phone*', $form['phone'], $content );
  }

}

?>
