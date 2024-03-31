<?php
define("APP_PATH", realpath('.'));
require_once APP_PATH . '/app/libraries/load_yaml.php';
define("GLOB_VAR", load_yaml_file(APP_PATH . '/app/config/config.yaml'));

session_start();
require_once APP_PATH . '/app/init/loader.php';
$loader = new Loader();
$loader->load();