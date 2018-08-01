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
require_once(APPPATH.'third_party/manifest/manifest.php');

Manifest::load();


/*
|--------------------------------------------------------------------------
| ExpressionEngine Config Items
|--------------------------------------------------------------------------
|
| The following items are for use with ExpressionEngine.  The rest of
| the config items are for use with CodeIgniter, some of which are not
| observed by ExpressionEngine, e.g. 'permitted_uri_chars'
|
*/
$config['app_version'] = '292';
$config['license_number'] = '';
$config['doc_url'] = 'http://ellislab.com/expressionengine/user-guide/';


/*
|--------------------------------------------------------------------------
| Paths and URLs
|--------------------------------------------------------------------------
|
|
*/
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';

$base_url = Manifest::get('BASE_URL', $protocol . $_SERVER['HTTP_HOST']);
$base_path = Manifest::get('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);

$system_folder                     = APPPATH . '../';
$images_folder                     = Manifest::get('IMAGES_FOLDER', 'images');
$images_path                       = $base_path . '/' . $images_folder;
$images_url                        = $base_url . '/' . $images_folder;

$config['index_page']          = '';
$config['site_index']          = '';
$config['base_url']            = $base_url . '/';
$config['site_url']            = $config['base_url'];
$config['cp_url']              = $config['base_url'] . 'admin.php';

$config['theme_folder_path']   = $base_path   . '/themes/';
$config['theme_folder_url']    = $base_url    . '/themes/';
$config['emoticon_path']       = $images_path . '/smileys/';
$config['emoticon_url']        = $images_url  . '/smileys/';
$config['captcha_path']        = $images_path . '/captchas/';
$config['captcha_url']         = $images_url  . '/captchas/';
$config['avatar_path']         = $images_path . '/avatars/';
$config['avatar_url']          = $images_url  . '/avatars/';
$config['photo_path']          = $images_path . '/member_photos/';
$config['photo_url']           = $images_url  . '/member_photos/';
$config['sig_img_path']        = $images_path . '/signature_attachments/';
$config['sig_img_url']         = $images_url  . '/signature_attachments/';
$config['prv_msg_upload_path'] = $images_path . '/pm_attachments/';


/*
|--------------------------------------------------------------------------
| System Status and Debugging
|--------------------------------------------------------------------------
|
|
*/
$config['is_system_on'] = Manifest::get('SYSTEM_ON', 'y');
$config['allow_extensions']   = 'y';
$config['enable_hooks'] = 'y';
$config['cookie_prefix'] = '';
$config['cookie_httponly'] = 'y';

$config['debug']              = Manifest::get('DEBUG', 2);
$config['email_debug']        = Manifest::get('DEBUG_EMAIL', 'y');
$config['show_profiler']      = (isset($_GET['D']) && $_GET['D'] == 'cp') ? 'n' : Manifest::get('DEBUG_PROFILER', 'y');
$config['template_debugging'] = Manifest::get('DEBUG_TEMPLATES', 'y');


/*
|--------------------------------------------------------------------------
| Performance
|--------------------------------------------------------------------------
|
|
*/
$config['disable_all_tracking']        = 'y';
$config['enable_sql_caching']          = 'n';
$config['disable_tag_caching']         = 'n';
$config['enable_online_user_tracking'] = 'n';
$config['dynamic_tracking_disabling']  = '500';
$config['enable_hit_tracking']         = 'n';
$config['enable_entry_view_tracking']  = 'n';
$config['log_referrers']               = 'n';

$config['gzip_output']                 = Manifest::get('GZIP_ENABLED', 'n');


/*
|--------------------------------------------------------------------------
| Miscellaneous
|--------------------------------------------------------------------------
|
|
*/
$config['new_version_check']        = 'n'; // no slowing my CP homepage down with this
$config['daylight_savings']         = ((bool) date('I')) ? 'y' : 'n'; // Autodetect DST
$config['use_category_name']        = 'y';
$config['reserved_category_word']   = 'category';
$config['word_separator']           = 'dash'; // dash|underscore


/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of "AUTO" works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'            Default - auto detects
| 'PATH_INFO'       Uses the PATH_INFO
| 'QUERY_STRING'    Uses the QUERY_STRING
| 'REQUEST_URI'     Uses the REQUEST_URI
| 'ORIG_PATH_INFO'  Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol'] = 'AUTO';


/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'EE_';


/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
|
|   0 = Disables logging, Error logging TURNED OFF
|   1 = Error Messages (including PHP errors)
|   2 = Debug Messages
|   3 = Informational Messages
|   4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 0;


/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the
| default system/expressionengine/logs/ directory. Use a full server path
| with trailing slash.
|
| Note: You may need to create this directory if your server does not
| create it automatically.
|
*/
$config['log_path'] = '';


/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';


/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the
| default system/expressionengine/cache/ directory. Use a full server path
| with trailing slash.
|
*/
$config['cache_path'] = '';


/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Sessions class with encryption
| enabled you MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = Manifest::get('ENCRYPTION_KEY', '');


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = true;


/* End of file config.php */
/* Location: ./system/expressionengine/config/config.php */
