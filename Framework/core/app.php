<?php

require_once CORE_PATH . 'request.php';

/**
 * Framework App核心
 *
 * @property $request
 */
class App
{
    public static $app = null;

    private function __construct()
    {
    }

    public static function instance()
    {
        if (self::$app === null) {
            self::$app = new self();
        }
        return self::$app;
    }

    /**
     * @param $method
     * @return bool|Request
     */
    public function __get($method)
    {
        switch ($method) {
            case 'request':
                return new Request();
        }
    }

    private function __clone()
    {
    }
}

