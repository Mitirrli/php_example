<?php

require_once CORE_PATH . 'route.php';

$env = file(__DIR__ . '/../.env');
foreach ($env as $val) {
    putenv(rtrim($val));//加载.env
}



