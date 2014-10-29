# Manifest

Manifest is a simple module that enables the storage of Expression Engine configuration settings in the environment.  This is a simple wrapper for the awesome [PHP dotenv project by Vance Lucas](https://github.com/vlucas/phpdotenv).

## Installation

1. Download the Manifest module
2. Unpack it and place the manifest folder in your `third_party` directory


## Setup


Move the `.env.example` file to `system/expressionengine/.env` and customize the configuration values (and feel free to add more!)

You can now access these configuration values in any of the ExpressionEngine config files using the native php `getenv($key)` function or `Manifest::get($key, $fallback_value)`

### Examples

Included in this repository are sample files for `config.php` and `database.php` which are using the values supplied in our example `.env` file.

You don't have to use them, but we thought they would be helpful guidelines and a viable quick start option if you like our config setup.


### Contributing

We're always open to suggestions and feedback in the issues but if you feel up to the task of creating a pull request for your changes that would be greatly appreciated!

----

### Alternative Setup

We're fond of the procedures outlined above but if you're a purist and don't like loading the Manifest class into your config (and have no need for fallbacks) then this is the method for you!

Make sure System Hooks are enabled by going to your `config/config.php` file and updating the `enable_hooks` setting to be: 

```php
$config['enable_hooks'] = TRUE;
```

Insert the following code in your `expressionengine/config/hooks.php` file:

```php
$hook['pre_system'] = array(
	'class'    => 'Manifest',
	'function' => 'load',
	'filename' => 'manifest.php',
	'filepath' => 'third_party/manifest',
	'params'   => array()
);
```

### About EEHarbor

[EEHarbor](http://eeharbor.com) is the point of shipment for fine ExpressionEngine goods brought to you by the fellas at [Packet Tide](http://packettide.com). 

Looking to have some ExpressionEngine goods of your own built? [Drop us a note. We'd love to chat](mailto:hello@eeharbor.com).

