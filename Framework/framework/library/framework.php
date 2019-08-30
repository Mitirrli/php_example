<?php

/**
 * 获得配置文件
 *
 * @param $name
 * @return mixed
 */
function config($name)
{
    $file = CONFIG_PATH . $name . '.php';
    if (is_file($file)) {
        return require $file;
    } else {
        echo 'config file is not exist!';
    }
    return false;
}

/**
 * 获取环境变量
 *
 * @param $config
 * @return array|false|string
 */
function env($config)
{
    return getenv($config);
}
