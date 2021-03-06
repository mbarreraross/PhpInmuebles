<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ]
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['sandinosaso'],
            'enableRegistration' => true,
            'modelMap' => [
                'User' => 'common\models\User',
                'RegistrationForm' => 'common\models\RegistrationForm',
            ]
        ],
    ]
];
