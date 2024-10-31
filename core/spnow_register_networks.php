<?php
/**
* Register API Init - Register REST Route - Network Sites
*
* Description: Registering a REST Route for ServicePress blogs to pull back a list of Network sites
* @since 1.1
*
* @param none
* @return type Array Return an array of Blogs available from Network Sites
*/
add_action('rest_api_init', 'spnow_register_networks');
function spnow_register_networks() {
  register_rest_route(SPNOW_SERVICEPRESS_REST_BASE.'/'.SPNOW_SERVICEPRESS_API_VERSION, 'networks', [
    'methods' => 'GET',
    'callback' => 'spnow_get_network_blog_networks',
    'args' => array(),
    'permission_callback' => function( $request ) {
        return is_user_logged_in();
    }
  ]);
};

/**
* Register API Init - Register REST Route - Network Sites
*
* Description: Registering a REST Route for ServicePress blogs to pull back a list of Network sites
* @since 1.1
*
* @param none
* @return type Array Return an array of Blogs available from Network Sites
*/
function spnow_get_network_blog_networks($param) {
  try {
    global $wpdb;
    $networks = $wpdb->get_results("SELECT * FROM wp_site");
    return $networks;
  } catch (Error $e) {
    return array(["result" => false]);
  }
}

/**
* Register API Init - Register REST Route - Network Sites
*
* Description: Registering a REST Route for ServicePress blogs to pull back a list of Network sites
* @since 1.1
*
* @param none
* @return type Array Return an array of Blogs available from Network Sites
*/
add_action('rest_api_init', 'spnow_register_network_info');
function spnow_register_network_info() {
  register_rest_route(SPNOW_SERVICEPRESS_REST_BASE.'/'.SPNOW_SERVICEPRESS_API_VERSION, 'network_info', [
    'methods' => 'GET',
    'callback' => 'spnow_get_network_info',
    'args' => array(),
    'permission_callback' => function( $request ) {
        return is_user_logged_in();
    }
  ]);
};

/**
* Register API Init - Register REST Route - Network Sites
*
* Description: Registering a REST Route for ServicePress blogs to pull back a list of Network sites
* @since 1.1
*
* @param none
* @return type Array Return an array of Blogs available from Network Sites
*/
function spnow_get_network_info($param) {
  try {
    $network_info = get_networks();
    return $network_info;
  } catch (Error $e) {
    return array(["result" => false]);
  }
}
?>