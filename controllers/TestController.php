<?php


namespace app\controllers;


 use yii\web\Controller;

 class TestController extends Controller{
     public  function actionIndex(){
         $Hi='HI';
         return $this->render('index', ['HI'=>$Hi]);


     }
 }