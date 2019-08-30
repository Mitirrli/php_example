<?php

namespace app\controllers;

use app\Controller;
use app\model\TestModel;

class TestController extends Controller
{
    public function test()
    {
        $model = new TestModel();
        var_dump($model->test());
        die;
    }

    public function sql()
    {
        var_dump(count([1, 2]));
        die;
    }


}
