<?php
/**
 * 加载env
 */

$env = file(__DIR__ . '/../.env');
foreach ($env as $val) {
    putenv(rtrim($val));
}
