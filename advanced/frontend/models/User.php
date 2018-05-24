<?php
/**
 * author: zly
 * Date: 2018/5/23
 * Time: 17:26
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class User extends ActiveRecord  {
    public $username;
    public $password;
    public $salt;
    public $phone;
    public $email;
    
   
}