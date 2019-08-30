<?php

namespace app\controllers;

use app\Controller;
use app\model\TestModel;

/**
 * 测试控制器
 * Class TestController
 * @package app\controllers
 */
class TestController extends Controller
{
    public function test()
    {
        $model = new TestModel();
        $model->test();
    }
}
