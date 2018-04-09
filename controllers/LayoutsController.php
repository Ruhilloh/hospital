<?php
/**
 * Created by PhpStorm.
 * User: SGH
 * Date: 10/18/2017
 * Time: 10:35 PM
 */

namespace app\controllers;


use app\models\Tit;
use yii\web\Controller;

class Layouts extends Controller

{
    public function Tit()
    {
        $t=new Tit();
        return $this->render('kardiologiya', compact('k'));

    }
}