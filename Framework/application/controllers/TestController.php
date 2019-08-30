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

    /**
     * 按位与
     */
    public function test1()
    {
        $a = 6;//110
        $b = 3;//011
//        dd($a & $b);  //2
        //设置消息提醒的功能  邮箱提醒、短信提醒、公众号提醒


//        dd($a & 1);
//        将整数与1 按位与 当第一位为1的都是奇数

        //1、2、4
        dd(5 & 2);
    }
}
