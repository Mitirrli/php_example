<?php
/**
 * 加载env
 */

$env = file('.env');
foreach ($env as $val) {
    putenv(rtrim($val));
}
