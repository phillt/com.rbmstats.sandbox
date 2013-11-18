<?php
// Config for constant routes for mac
$root=pathinfo($_SERVER['SCRIPT_FILENAME']);
define ('BASE_FOLDER', basename($root['dirname']));
define ('SITE_ROOT',    realpath(dirname(__FILE__)));
define ('SITE_URL',    'http://'.$_SERVER['HTTP_HOST'].'/');

// Config db user

define ('DB_TYPE', 'mysql');
define ('DB_HOST', '127.0.0.1');
define ('DB_USER', 'root');
define ('DB_PASSWORD', 'my4macs');
define ('DB_NAME', '_stats');