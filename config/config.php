<?php

/**
 * Parses a configuration (ini) file and returns the settings.
 */

if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/'); // config/
    define('BASEPATH', dirname(__DIR__, 1) . '/'); // TechnicalChallenge1/
    define('INIPATH', BASEPATH . 'config/app.ini');
}

global $config, $api;

$config = parse_ini_file(INIPATH);
$api = $config['API'];
