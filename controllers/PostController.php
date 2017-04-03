<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 02.04.2017
 * Time: 19:14
 */

namespace app\controllers;


use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = Post::find()->all();

        return $this->render('index', compact('model'));
    }

}