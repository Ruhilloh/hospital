<?php


namespace app\models;


use yii\base\Model;

class Tit extends Model
{
    public $t="News";
    public  function actiobIndex(){
        return $this->t;

    }

}