<?php
/*
Plugin Name: ServicePress: Automate Inventory
Plugin URI: https://servicepress.app
Description: ServicePress is a certified integration with ServiceNow and WordPress. Single sites and Multiple MultiSite Networks supported. Import all WordPress Sites, Users, Plugins, Themes, Posts, Pages, and custom Post Types. Manage total installs for each across all sites. 
Version: 1.3
Author: Harmedia Studios LLC
Author URI: https://harmediastudios.com
TextDomain: servicepress
Network: true
*/
define( 'SPNOW_SERVICENOW_CITY', 'Washington' );
define( 'SPNOW_SERVICENOW_VERSION', '1.3' );
define( 'SPNOW_SERVICEPRESS_BUILD', 'R2' );
define( 'SPNOW_SERVICEPRESS_VERSION', '2.0.0' );
define( 'SPNOW_SERVICEPRESS_REST_BASE', 'spnow' );
define( 'SPNOW_SERVICEPRESS_API_VERSION', 'v1' );
define( 'SPNOW_SERVICEPRESS_SLUG', 'servicepress/servicepress.php' );
define( 'SPNOW_SERVICEPRESS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SPNOW_SERVICEPRESS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SPNOW_SERVICEPRESS_CORE_PATH', SPNOW_SERVICEPRESS_PLUGIN_PATH . "core");
require_once(SPNOW_SERVICEPRESS_CORE_PATH . "/spnow_register_user_email.php");
require_once(SPNOW_SERVICEPRESS_CORE_PATH . "/spnow_register_user_roles.php");
require_once(SPNOW_SERVICEPRESS_CORE_PATH . "/spnow_register_sites.php");
require_once(SPNOW_SERVICEPRESS_CORE_PATH . "/spnow_register_networks.php");
require_once(SPNOW_SERVICEPRESS_CORE_PATH . "/spnow_register_site_version.php");
?>