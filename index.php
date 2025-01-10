<?php
// Instellen van include path
define('VIEW_PATH', __DIR__ . '/view');
define('CONFIG_PATH', __DIR__ . '/config.php');
define('UTILS_PATH', __DIR__ . '/phpUtils.php');

// Laad configuratie en utilities
require_once CONFIG_PATH;
require_once UTILS_PATH;

// Laad de view
include VIEW_PATH . '/index_view.php';


