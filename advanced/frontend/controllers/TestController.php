<?php
namespace frontend\controllers;

use frontend\models\User;
use yii\web\Controller;

/**
 * author: zly
 * Date: 2018/5/23
 * Time: 11:22
 * 测试控制器
 */
class TestController extends Controller {
    /**
     * 入口文件
     */
    public function actionIndex() {
        
        echo "我是入口文件";
    }
    
    //访问的地址：http://localhost/yii2/advanced/frontend/web/test/save-user
    public function actionSaveUser() {
        
        echo 1111111;
        die;
        $model = new User();
        $model->username = 'zly';
        $model->salt = '12345';
        $password = '123456';
        $model->password = md5($password . $model->salt);
        $model->phone = '18301090553';
        $model->email = 'zhangliyan0@hotmail.com';
        $result = $model->insert();
        print_r($result);
        
    }
}