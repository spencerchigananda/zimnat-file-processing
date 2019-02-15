<?php
/**
 * Created by PhpStorm.
 * User: Spencer
 * Date: 2/14/2019
 * Time: 3:18 PM
 */

namespace console\controllers;



use yii\console\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo "cron service running";

    }

}