<?php

/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 01.04.16
 * Time: 22:55
 */
class NewsController{

    public function actionIndex(){

        echo 'Показывает список новостей';
        
        return true;
    }

    public function actionView(){

        echo 'Показывает одну новость в развернутом виде';

        return true;
    }

}