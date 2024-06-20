<?php
/**
 * Plugin Name: yForms
 * Description: A plugin that allows users to create a custom, dynamic login form with input fields for email, name, age, gender, mobile number, etc.
 * Version: 2.3
 * Author: Priyansh JS. Yadav
 * Author URI: https://akritiart.netlify.app
 */
 require_once('C:\xampp\htdocs\wordpress\wp-load.php');
 include "settings.php";
 include "yformsabout.php";

 function y_forms_shortcode( $atts, $content = null ) {
    // Set up default parameters
    extract(shortcode_atts(array(
        'title' => '',
        'fields' => 'email,username,age,gender,mobile_number',
        'labels' => '',
        'display_type' => 'blocks',
    ), $atts));

    //Get the form title
    $form_title = $title;

    // Get the fields array
    $fields_array = explode(',', $fields);

    // Get the labels array
    $labels_array = explode(',', $labels);

    // Create the form fields
    $form_fields = '';
    foreach ($fields_array as $key => $field) {
        $label = (isset($labels_array[$key]))? $labels_array[$key] : ucfirst($field);
        if ($field == " passcode" or $field == "passcode") {
            $form_fields.= '<label>'. $label. '</label><input class="form-input" type="password" name="'. $field. '" placeholder="Enter your password"><br>';
        }
        elseif ($field == "email") {
            $form_fields.= '<label>'. $label. '</label><input class="form-input" type="email" name="'. $field. '" placeholder="Enter your email"><br>';
        }
        elseif ($field == "mobile_number" or $field == "age") {
            $form_fields.= '<label>'. $label. '</label><input class="form-input" type="number" name="'. $field. '" placeholder="Enter your '.$field.'"><br>';
        }
        else {
            $form_fields.= ''.$label.'<input class="form-input" type="text" name="'. $field. '" placeholder = "Enter your '.$field.'"><br>';
        }
        
    }

    // Create the submit button
    $submit_button = '<input type="hidden" name="y_forms_data" value="1">
    <input type="submit" value="Submit">';

    // Create the form
    $form_action = plugins_url('form-handler.php', __FILE__);

    $form = '<form action="'. $form_action. '" method="post"><h1>'.$title.'</h1><br>'. $form_fields. $submit_button. '</form>';


    // Display the form
    if ($display_type == 'blocks') {
        return '<div class="y-forms-block">'. $form. '</div>';
    }
}
add_shortcode('y_forms', 'y_forms_shortcode');

?>