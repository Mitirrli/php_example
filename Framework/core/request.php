<?php

/**
 * Framework 请求核心
 *
 */
class Request
{

    public function __construct()
    {
    }

    public function __call($method, $args)
    {
        switch ($method) {
            case 'get':
                return empty($args) ? $_GET : $_GET[$args[0]];

            case 'post':
                return empty($args) ? $_POST : $_POST[$args[0]];

            case 'request':
                return empty($args) ? $_REQUEST : $_REQUEST[$args[0]];

            case 'server';
                return empty($args) ? $_SERVER : $_SERVER[$args[0]];

            default:
                return false;
        }
    }

    private function __clone()
    {
    }
}
