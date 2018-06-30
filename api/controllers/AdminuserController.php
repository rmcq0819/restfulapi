<?php
namespace api\controllers;

use yii\rest\ActiveController;
use common\models\Adminuser;
use api\models\ApiLoginForm;

/**
 * Article controller
 */
class AdminuserController extends ActiveController
{
    public $modelClass = 'common\models\Adminuser';

    public function actionLogin()
    {
        $model = new ApiLoginForm;
        $model->username = $_POST['username'];
        $model->password = $_POST['password'];

        if ($model->login()) {
            return ['access_token' => $model->login()];
        } else {
            $model->validate();
            return $model;
        }
    }
}
