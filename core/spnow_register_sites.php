<?php
/**
* Register API Init - REST Pre Callback
*
* Description: Using the REST Pre callback to switch the blog based on the content of the domain
* @since 1.0.0
*
* @param none
* @return type boolean Switching of Site information for the Rest API Url
*/
add_action('rest_api_init', 'spnow_register_rest_pre_callback');
function spnow_register_rest_pre_callback() {
  global $wpdb;
  try {
    $http_host = sanitize_url($_SERVER['HTTP_HOST']);
    $args = array(
          'domain' => $http_host,
          'network' => $host_network
    );
    $results = get_sites($args);
    if ($results) {
      $result = $results[0];
      if ($_GET['blog_id']){
        $blog_id = sanitize_text_field($_GET['blog_id']);
      } else {
        $blog_id = 1;
      }
      if ($_GET['network_id']){
        $network_id = sanitize_text_field($_GET['network_id']);
      } else {
        $network_id = 1;
      }
      if (is_numeric($blog_id)) {
        $wpdb->set_blog_id($blog_id, $network_id);
      } else {
        $wpdb->set_blog_id(1, 1);
      }
    }
  } catch (Error $e) {
    return false;
  }
}

/**
* Register API Init - Register REST Route - Network Sites
*
* Description: Registering a REST Route for ServicePress blogs to pull back a list of Network sites
* @since 1.0.0
*
* @param none
* @return type Array Return an array of Blogs available from Network Sites
*/
add_action('rest_api_init', 'spnow_register_network_blogs');
function spnow_register_network_blogs() {
  register_rest_route(SPNOW_SERVICEPRESS_REST_BASE.'/'.SPNOW_SERVICEPRESS_API_VERSION, 'sites', [
    'methods' => 'GET',
    'callback' => 'spnow_get_network_blog_sites',
    'permission_callback' => function( $request ) {
        return is_user_logged_in();
    },
    'args' => array(
        'public',
        'archived',
        'mature',
        'spam',
        'deleted',
        'include',
        'exclude',
        'limit',
        'before',
        'after',
        'fields',
        'id',
        'site__in'    ,
        'site__not_in',
        'page',
        'network_id',
        'network__in',
        'network__not_in',
        'domain',
        'domain__in',
        'domain__not_in',
        'path',
        'path__in',
        'path__not_in',
        'search',
        'search_columns',
        'count',
        'date_query',
        'meta_query',
        'meta_key',
        'meta_value',
        'meta_type',
        'meta_compare'
    ),
  ]);
}

/**
* Register API Init - Register REST Route - Network Sites
*
* Description: Registering a REST Route for ServicePress blogs to pull back a list of Network sites
* @since 1.0.0
*
* @param none
* @return type Array Return an array of Blogs available from Network Sites
*/

function spnow_get_network_blog_sites($param) {
  try {

    if (isset($param['domain__in'])){
        $domain__in = explode(',', $param['domain__in']);
    }
    if (isset($param['site__in'])){
        $site__in = explode(',', $param['site__in']);
    }
    if (isset($param['network__in'])){
        $network__in = explode(',', $param['network__in']);
    }
    if (isset($param['path__in'])){
        $path__in = explode(',', $param['path__in']);
    }
    if (isset($param['domain__not_in'])){
        $domain__not_in = explode(',', $param['domain__not_in']);
    }
    if (isset($param['site__not_in'])){
        $site__not_in = explode(',', $param['site__not_in']);
    }
    if (isset($param['network__not_in'])){
        $network__not_in = explode(',', $param['network__not_in']);
    }
    if (isset($param['path__not_in'])){
        $path__not_in = explode(',', $param['path__not_in']);
    }
    if (isset($param['before'])){
        $before = $param['before'];
    }
    if (isset($param['after'])){
        $after = $param['after'];
    }
    if (isset($before) || isset($after)){
        $date_query = array(array('before' => $before, 'after' => $after, 'inclusive' => true));
    }

    $args = array(
      'public'          => $param['public'],
      'archived'        => $param['archived'],
      'mature'          => $param['mature'],
      'spam'            => $param['spam'],
      'deleted'         => $param['deleted'],
      'number'          => $param['limit'],
      'fields'          => $param['fields'],
      'id'              => $param['id'],
      'site__in'        => $site__in,
      'site__not_in'    => $site__not_in,
      'offset'          => $param['page'],
      'network_id'      => $param['network_id'],
      'network__in'     => $network__in,
      'network__not_in' => $network__not_in,
      'domain'          => $param['domain'],
      'domain__in'      => $domain__in,
      'domain__not_in'  => $domain__not_in,
      'path'            => $param['path'],
      'path__in'        => $path__in,
      'path__not_in'    => $path__not_in,
      'search'          => $param['search'],
      'search_columns'  => $param['search_columns'],
      'count'           => $param['count'],
      'date_query'      => $date_query,
      'meta_query'      => $param['meta_query'],
      'meta_key'        => $param['meta_key'],
      'meta_value'      => $param['meta_value'],
      'meta_type'       => $param['meta_type'],
      'meta_compare'    => $param['meta_compare'],
    );
    $sites = get_sites( $args );
   # return $args;
    return $sites;//$args;
  } catch (Error $e) {
    return false;
  }
}
?>