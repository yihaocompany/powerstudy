<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Dlpx\Models' => APP_PATH . '/common/models/',
    'Dlpx'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Dlpx\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Dlpx\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
