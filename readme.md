# Manifest

Manifest is a simple module that enables the storage of Expression Engine configuration settings in the environment.  This is a simple wrapper for the awesome [PHP dotenv project by Vance Lucas](https://github.com/vlucas/phpdotenv).

## Installation

1. Download the Manifest module
2. Unpack it and place the manifest folder in your `third_party` directory

## Setup

1. Insert the following code in your `expressionengine/config/hooks.php` file:
```php
	$hook['pre_system'] = array(
		'class'    => 'Manifest',
		'function' => 'execute',
		'filename' => 'manifest.php',
		'filepath' => 'third_party/manifest',
		'params'   => array()
	);
```
2. Move the `third_party/manifest/.env.example` file to `expressionengine/.env` and customize the configuration values (and feel free to add more!)
3. You can now access these configuration values in any of the ExpressionEngine config files (i.e. `expressionengine/config/config.php` and `expressionengine/config/database.php`).

### Example

Using the values in the provided `.env.example` file your `config/database.php` file might look something like this:

```php
	$db['expressionengine']['hostname'] = 'localhost';
	$db['expressionengine']['username'] = getenv('DB_USERNAME');
	$db['expressionengine']['password'] = getenv('DB_PASSWORD');
	$db['expressionengine']['database'] = getenv('DB_DATABASE');
	$db['expressionengine']['dbdriver'] = 'mysql';
```