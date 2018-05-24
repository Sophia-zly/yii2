<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'                  => 'app-frontend',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'defaultRoute'        => 'Test',
    'controllerNamespace' => 'frontend\controllers',
//    'homeUrl'             => '/',//域名配置
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-frontend',
//            'baseUrl'   => '',//域名配置
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => TRUE,
            'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => TRUE],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //链接数据库
        'db'           => [
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=localhost;dbname=test',
            'username' => 'root',
            'password' => 'root',
            'charset'  => 'utf8',
        ],
        'urlManager'   => array(
            'showScriptName'      => FALSE,//隐藏index.php
            'enableStrictParsing' => FALSE,
            'enablePrettyUrl'     => TRUE,
//            'rules'               => array(
//                "<controller:\w+>/<action:\w+>/<id:\d+>" => "<controller>/<action>",
//                "<controller:\w+>/<action:\w+>"          => "<controller>/<action>",
//            ),
        ),
    ],
    'params'              => $params,
];
