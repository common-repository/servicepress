<?php
/**
* Register API Init - Version Check for ServiceNow
*
* Description: Getting the WordPress site version and upgrade version
* @since 1.0.0
*
* @param none
* @return type settings Return site settings for the Version field
*/

add_action('rest_api_init', 'spnow_register_rest_servicepress_version_check');
function spnow_register_rest_servicepress_version_check() {
    register_rest_route(SPNOW_SERVICEPRESS_REST_BASE.'/'.SPNOW_SERVICEPRESS_API_VERSION, 'site_settings', array(
        'methods' => 'GET',
        'callback' => 'spnow_get_network_version_check',
        'args' => [
                'show_in_rest' => true
        ],
        'permission_callback' => function( $request ) {
            return is_user_logged_in();
        }
    ));
}
function spnow_get_network_version_check() {
    return get_option('_site_transient_update_core');
}
?>
