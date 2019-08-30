<?php

define("PRODUCT_PATH", __DIR__);//项目路径
define("APP_PATH", __DIR__ . '/application/');//应用路径
define("CORE_PATH", __DIR__ . '/core/');

require_once PRODUCT_PATH . '/vendor/autoload.php';
require_once CORE_PATH . 'app.php';
$app = App::instance();//核心类加载

require_once CORE_PATH . 'load.php';
