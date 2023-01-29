<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\rest\Controller;

class BaseController extends Controller
{
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class
        ];
        return $behaviors;
    }
}
