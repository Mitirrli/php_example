<?php

class Env
{
    public static function register()
    {
        $env = file(PRODUCT_PATH . DS . '.env');
        foreach ($env as $val) {
            putenv(rtrim($val));
        }
    }
}
