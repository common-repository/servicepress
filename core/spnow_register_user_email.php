<?php
/**
* Register API Init - Email
*
* Description: The default API doesn't return email address. For us to uniquely represent users, we need the email address field returned.
* @since 1.0.0
*
* @param none
* @return type email User's email address.
*/
add_action('rest_api_init', 'spnow_register_rest_user_email');
function spnow_register_rest_user_email(){
    register_rest_field('user', 'email', array(
        'schema' => array(
                'email'
        )
    ));
}
?>