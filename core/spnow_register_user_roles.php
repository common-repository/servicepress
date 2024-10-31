<?php
/**
* Register API Init - Roles
*
* Description: The default API doesn't return roles. For us to capture the user roles for security, we need to return the User's roles
* @since 1.0.0
*
* @param none
* @return type roles User's roles.
*/
add_action('rest_api_init', 'spnow_register_user_roles');
function spnow_register_user_roles() {
    register_rest_field('user', 'roles', array(
        'get_callback' => 'spnow_get_user_roles',
        'update_callback' => null,
        'schema' => array(
            'type' => 'array'
        )
    ));
}
function spnow_get_user_roles($object, $field_name, $request) {
    return get_userdata($object['id'])->roles;
}
?>
