<?php

namespace home\modules\member;

use Yii;
use yii\web\ForbiddenHttpException;
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'home\modules\member\controllers';
    public $layout = '/member';
    public function init()
    {
        parent::init();
        if(!(Yii::$app->user->can('Customer'))){
            throw new ForbiddenHttpException(\Yii::t('yii', 'You are not allowed to perform this action.'));
        }
        // custom initialization code goes here
    }
}