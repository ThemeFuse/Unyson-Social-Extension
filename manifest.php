<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Social', 'fw' );
$manifest['description'] = __( 'Use this extension to configure all your social related APIs. Other extensions will use the Social extension to connect to your social accounts.', 'fw' );
$manifest['version'] = '1.0.4';
$manifest['display'] = true;
$manifest['standalone'] = true;
$manifest['github_update'] = 'ThemeFuse/Unyson-Social-Extension';
