<?php

$uri = trim(explode('?', $app->request->server('REQUEST_URI'))[0], '/');//路由
$method = strtolower($app->request->server('REQUEST_METHOD'));//方法

$route = require_once PRODUCT_PATH . '/config/route.php';



if (array_key_exists($uri, $route) && $route[$uri][1] === $method) {
    $function = explode('@', $route[$uri][0]);

    $object = new $function[0];
    $object->$function[1];

    call_user_func_array([$function[0], $function[1]], []);
} else {
    echo '找不到该路由';
}


