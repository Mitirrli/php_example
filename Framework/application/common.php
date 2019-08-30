<?php

//用户自定义函数

if (!function_exists('dd')) {
    function dd($data)
    {
        var_dump($data);die;
    }
}
