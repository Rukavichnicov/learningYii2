<?php

namespace app\modules\api;

use yii\base\Module;

class ApiModule extends Module
{
    public function init()
    {
        parent::init();
        $this->params['components']['request']['parsers'] = [
            'application/json' => 'yii\web\JsonParser',
            'multipart/form-data' => 'yii\web\MultipartFormDataParser',
        ];
        $this->params['components']['urlManager']['rules'] = [
            'class' => 'yii\rest\UrlRule', 'controller' => ['book']
        ];
    }
}