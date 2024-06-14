<?php
/**
 * Plugin Name: yForms
 * Description: A plugin that allows users to create a custom, dynamic login form with input fields for email, name, age, gender, mobile number, etc.
 * Version: 2.0
 * Author: Priyansh JS. Yadav
 * Author URI: https://akritiart.netlify.app
 */
 require_once('C:\xampp\htdocs\wordpress\wp-load.php');

 // Include the form builder class
//  require_once 'form-builder.php';
 
 // Create an instance of the form builder class
//  $form_builder = new Form_Builder();
 
 // Add the form builder to the WordPress admin menu
//  add_action('admin_menu', array($form_builder, 'add_menu_item'));
 
 // Enqueue the CSS and JavaScript files
//  add_action('admin_enqueue_scripts', array($form_builder, 'enqueue_assets'));

 function y_forms_shortcode( $atts, $content = null ) {
    // Set up default parameters
    extract(shortcode_atts(array(
        'fields' => 'email,username,age,gender,mobile_number',
        'labels' => '',
        'display_type' => 'blocks',
    ), $atts));


    // Get the fields array
    $fields_array = explode(',', $fields);

    // Get the labels array
    $labels_array = explode(',', $labels);

    // Create the form fields
    $form_fields = '';
    foreach ($fields_array as $key => $field) {
        $label = (isset($labels_array[$key]))? $labels_array[$key] : ucfirst($field);
        $form_fields.= '<label>'. $label. '</label><input class="form-input" type="text" name="'. $field. '"><br>';
    }

    // Create the submit button
    $submit_button = '<input type="hidden" name="y_forms_data" value="1">
    <input type="submit" value="Submit">';

    // Create the form
    $form_action = plugins_url('form-handler.php', __FILE__);
    $form = '<form action="'. $form_action. '" method="post">'. $form_fields. $submit_button. '</form>';


    // Display the form
    if ($display_type == 'blocks') {
        return '<div class="y-forms-block">'. $form. '</div>';
    } else {
        return '<table class="y-forms-table"><tr><td>'. $form. '</td></tr></table>';
    }
}
add_shortcode('y_forms', 'y_forms_shortcode');

?>