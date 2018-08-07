<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
|--------------------------------------------------------------------------
| Load Manifest
|--------------------------------------------------------------------------
|
|
*/
require_once(SYSPATH.'user/addons/manifest/mod.manifest.php');

Manifest::load();

$config['base_url'] = Manifest::get('BASE_URL', $protocol . $_SERVER['HTTP_HOST']);
$config['base_path'] = Manifest::get('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);
$config['images_foler'] = Manifest::get('IMAGES_FOLDER', 'images');
$config['cp_url'] = Manifest::get('CP_URL', Manifest::get('BASE_URL') . '/admin.php');

$config['debug'] = Manifest::get('DEBUG', 2);
$config['enable_devlog_alerts'] = 'n';
$config['cache_driver'] = 'dummy';
$config['forum_is_installed'] = 'y';

$config['is_system_on'] = Manifest::get('SYSTEM_ON', 'y');
$config['multiple_sites_enabled'] = 'y';

// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '4.3.3';
$config['encryption_key'] = Manifest::get('ENCRYPTION_KEY', '');
$config['session_crypt_key'] = '8d4e558c2254e9fa2efe10c77b84e73e956bdb70';
$config['database'] = array(
    'expressionengine' => array(
        'hostname' => Manifest::get('DB_HOSTNAME', 'localhost'),
        'username' => Manifest::get('DB_USERNAME', 'root'),
        'password' => Manifest::get('DB_PASSWORD', 'root'),
        'database' => Manifest::get('DB_DATABASE', 'for_the_home_team'),

        'dbprefix' => 'exp_',
        'char_set' => 'utf8mb4',
        'dbcollat' => 'utf8mb4_unicode_ci',
        'port'     => ''
    ),
);
