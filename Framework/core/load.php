<?php

require_once CORE_PATH . 'route.php';

/**
 * 加载配置
 */
$env = file(__DIR__ . '/../.env');
foreach ($env as $val) {
    putenv(rtrim($val));
}

