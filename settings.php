<?php
function y_forms_settings_page() {
    add_menu_page('Y Forms Settings', 'Y Forms Settings', 'manage_options', 'y-forms-settings', 'y_forms_settings_callback');
}
add_action('admin_menu', 'y_forms_settings_page');

function y_forms_settings_callback() {
    ?>
    <div class="wrap">
        <h1>yForms Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('y-forms-settings-group'); ?>
            <?php do_settings_sections('y-forms-settings'); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
function y_forms_settings_init() {
    register_setting('y-forms-settings-group', 'y_forms_redirect_url');
    add_settings_section('y-forms-redirect-section', 'Redirect URL', 'y_forms_redirect_section_callback', 'y-forms-settings');
    add_settings_field('y_forms_redirect_url_field', 'Redirect URL:', 'y_forms_redirect_url_field_callback', 'y-forms-settings', 'y-forms-redirect-section');
}
add_action('admin_init', 'y_forms_settings_init');

function y_forms_redirect_section_callback() {
    echo '<p>Enter the URL where you want to be redirected after submitting the form.</p>';
}

function y_forms_redirect_url_field_callback() {
    $redirect_url = get_option('y_forms_redirect_url');
    ?>
    <input type="url" id="y_forms_redirect_url" name="y_forms_redirect_url" value="<?php echo esc_attr($redirect_url); ?>" />
    <?php
}