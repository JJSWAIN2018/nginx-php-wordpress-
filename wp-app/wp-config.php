$plugins = get_option( 'active_plugins' );
if ( count( $plugins ) === 0 ) {
  require_once(ABSPATH .'/wp-admin/includes/plugin.php');
  $pluginsToActivate = array( 'nginx-helper/nginx-helper.php' );
  foreach ( $pluginsToActivate as $plugin ) {
    if ( !in_array( $plugin, $plugins ) ) {
      activate_plugin( '/usr/share/nginx/www/wp-content/plugins/' . $plugin );
    }
  }
}
