<?php
/*
Plugin Name: Mini Zbigl Pop UP
Plugin URI: http://BiznesPilot.tk
Description: Wtyczka służy do tworzenia Pop Upów  - wyskakujących okienek do zapisu na listę za pomocą shortcodu
Version: 2.2
Author: Zbigniew Adamski
Author URI: http://ebiznes-praktycznie.pl/
*/

//Wordpress GitHub Plugin Updater
add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {
	include_once 'updater.php';
	define( 'WP_GITHUB_FORCE_UPDATE', true );
	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin
		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'zbigl-popup',
			'api_url' => 'https://api.github.com/repos/aikizbysio/updater-plugin',
			'raw_url' => 'https://raw.github.com/aikizbysio/updater-plugin/master',
			'github_url' => 'https://github.com/aikizbysio/updater-plugin',
			'zip_url' => 'https://github.com/aikizbysio/updater-plugin/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '4.1',
			'readme' => 'README.md',
			'access_token' => '',
		);
		new WP_GitHub_Updater( $config );
	}
}
//komentarz
?>
