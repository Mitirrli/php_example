<?php

//Debug选项

class Debug
{
    public static function register()
    {
        if (!env('DEBUG')) {
            ini_set('display_errors', 'On');
        }
    }
}
