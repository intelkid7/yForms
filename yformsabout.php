<?php
function y_forms_about_page() {
    add_menu_page('About & Instructions', 'yForms About & Instructions', 'manage_options', 'y-forms-about', 'y_forms_about_callback');
}
add_action('admin_menu', 'y_forms_about_page');

function y_forms_about_callback() {
    ?>
     <div>
         <h1 style="font-size: 2rem; font-weight: 600">About & Instructions</h1>
         <h2 style="font-size: 1.5rem">Welcome to Y Forms!</h2>
         <p style="font-size: 1rem">yForms is a dynamic form WordPress plugin which allows you to choose your form fields, and blends with the styles of your theme</p>
         <br>
         <h2>Shortcode</h2>
         <h4 style="font-size: 1rem">yForms provides shortcode support so you never loose the cool feeling of programming!</h4>
         <h4 style="font-size: 1rem">How to use the shortcodes:</h4>
         <p style="font-size: 0.9rem">To use the yForms shortcode, simply add the following code to your page or post:</p>
         <code>[y_forms] //This will load the default form format</code>
         <h4 style="font-size: 1rem">Valid Form Code:</h4>
         <code>[y_forms fields="field_names, seperated, by, commas" labels="labels, seperated, by, commas" display_type="blocks/table"]</code>
         <h4 style="font-size: 1rem">Valid Form Fields:</h4>
         <ul>
            <li>1. <code>email</code></li>
            <li>2. <code>username</code></li>
            <li>3. <code>age</code></li>
            <li>4. <code>gender</code></li>
            <li>5. <code>mobile_number</code></li>
            <li>6. <code>password</code></li>
        </ul>
        <h4 style="font-size: 1rem">Example:</h4>
        <code>[y_forms title="Login" fields="email, username, password" labels="Email, Username, Password" display_type="blocks"]</code>
     </div>
     <?php
}
?>