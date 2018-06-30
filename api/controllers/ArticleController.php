<?php
namespace api\controllers;

use yii\filters\auth\QueryParamAuth;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use common\models\Article;

/**
 * Article controller
 */
class ArticleController extends ActiveController
{
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(),[
            'authenticatior' => [
                'class' => QueryParamAuth::className()
            ]
        ]);
    }

    public $modelClass = 'common\models\Article';
}
