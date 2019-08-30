<?php

namespace app\model;

use mysqli;

/**
 * 测试模型
 * Class TestModel
 * @package app\model
 */
class TestModel
{
    private $conf;

    public function __construct()
    {
        $this->conf = config('database');
    }

    public function test()
    {
        $mysqli = new mysqli($this->conf['DB_HOST'], $this->conf['DB_USER'], $this->conf['DB_PASSWORD'], $this->conf['DB_DATABASE']);

        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
        }

        $sql = "SELECT * FROM spider";
        $result = $mysqli->query($sql)->fetch_all();

        print_r($result);

        $mysqli->close();
    }
}
