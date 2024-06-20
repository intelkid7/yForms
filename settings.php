<?php
function y_forms_settings_page() {
    add_menu_page('yForms Settings', 'yForms Settings', 'manage_options', 'y-forms-settings', 'y_forms_settings_callback');
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
    register_setting('y-forms-settings-group', 'y_forms_database_name');
    register_setting('y-forms-settings-group', 'y_forms_table_name');
    add_settings_section('y-forms-redirect-section', 'Crucial Fields', 'y_forms_redirect_section_callback', 'y-forms-settings');
    add_settings_field('y_forms_redirect_url_field', 'Redirect URL:', 'y_forms_redirect_url_field_callback', 'y-forms-settings', 'y-forms-redirect-section');

    // add_settings_section('y-forms-redirect-section', 'Database Name', 'y_forms_redirect_section_callback', 'y-forms-settings');
    add_settings_field('y_forms_database_name_field', 'Database Name:', 'y_forms_database_name_field_callback', 'y-forms-settings', 'y-forms-redirect-section');

    // add_settings_section('y-forms-redirect-section', 'Table Name', 'y_forms_redirect_section_callback', 'y-forms-settings');
    add_settings_field('y_forms_table_name_field', 'Table Name:', 'y_forms_table_name_field_callback', 'y-forms-settings', 'y-forms-redirect-section');

}
add_action('admin_init', 'y_forms_settings_init');

function y_forms_redirect_section_callback() {
    echo '<p>Enter the URL, the name of the database you want to store information in and the name of the Table</p>';
}

function y_forms_redirect_url_field_callback() {
    $redirect_url = get_option('y_forms_redirect_url');
    ?>
    <input type="url" id="y_forms_redirect_url" name="y_forms_redirect_url" value="<?php echo esc_attr($redirect_url); ?>" placeholder="Ex: https://google.com" />
    <?php
}

function y_forms_database_name_field_callback() {
    $database_name = get_option('y_forms_database_name');
    ?>
    <input type="text" id="y_forms_database_name" name="y_forms_database_name" value="<?php echo esc_attr($database_name); ?>" placeholder="Ex: my_database"/>
    <?php
}

function y_forms_table_name_field_callback() {
    $table_name = get_option('y_forms_table_name');
    ?>
    <input type="text" id="y_forms_table_name" name="y_forms_table_name" value="<?php echo esc_attr($table_name); ?>" 
    placeholder="Ex: users"/>
    <?php
}