<?php
declare(strict_types=1);

if (!defined('PROJECT_ROOT')) {
    define('PROJECT_ROOT', dirname(__DIR__));
}

require_once PROJECT_ROOT . '/config/config.php';

$coreAutoload = PROJECT_ROOT . '/CorianderCore/autoload.php';
if (is_file($coreAutoload)) {
    require_once $coreAutoload;
}

$composerAutoload = PROJECT_ROOT . '/vendor/autoload.php';
if (is_file($composerAutoload)) {
    require_once $composerAutoload;
}
