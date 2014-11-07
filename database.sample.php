<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'third_party/manifest/manifest.php');

Manifest::load();

$active_group = 'expressionengine';
$active_record = TRUE;

$db['expressionengine']['hostname'] = 'localhost';
$db['expressionengine']['username'] = Manifest::get('DB_USERNAME', 'root');
$db['expressionengine']['password'] = Manifest::get('DB_PASSWORD', 'root');
$db['expressionengine']['database'] = Manifest::get('DB_DATABASE', 'for_the_home_team');
$db['expressionengine']['dbdriver'] = 'mysqli';
$db['expressionengine']['pconnect'] = FALSE;
$db['expressionengine']['dbprefix'] = 'exp_';
$db['expressionengine']['swap_pre'] = 'exp_';
$db['expressionengine']['db_debug'] = TRUE;
$db['expressionengine']['cache_on'] = FALSE;
$db['expressionengine']['autoinit'] = FALSE;
$db['expressionengine']['char_set'] = 'utf8';
$db['expressionengine']['dbcollat'] = 'utf8_general_ci';
$db['expressionengine']['cachedir'] = APPPATH . getenv('DB_CACHE_DIR');

/* End of file database.php */
/* Location: ./system/expressionengine/config/database.php */