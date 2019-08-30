<?php

namespace framework;

require PRODUCT_PATH . '/vendor/autoload.php';//composer自动加载

//自动加载注册
spl_autoload_register(function ($class) {
    $file = FRAMEWORK_PATH . 'library' . DIRECTORY_SEPARATOR . $class . '.php';
    if (is_file($file)) {
        include $file;
    }
});

require LIBRARY_PATH . 'framework.php';

\App::register();//App加载
\Env::register();//环境加载
\Route::register();//路由加载


