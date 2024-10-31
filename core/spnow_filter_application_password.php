<?php
/**
* Filter Application Password Display
*
* Description: If non-ssl for development, you will need to allow Application Passwords. Setting will enable in WordPress site
* @since 1.0.0
*
* @param none
* @return none
*/
add_filter( 'wp_is_application_passwords_available', '__return_true' );
?>
