<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'th_TH',
	'name'=>'House Gis',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
		'thaiFormatter'=>[
			'class'=>'dixonsatit\thaiYearFormatter\ThaiYearFormatter',
		],
		

    ],
    'modules' => [
        'rbac' => [
            'class' => 'johnitvn\rbacplus\Module',
            'userModelClassName' => null,
            'userModelIdField' => 'id',
            'userModelLoginField' => 'username',
            'userModelLoginFieldLabel' => null,
            'userModelExtraDataColumls' => null,
            'beforeCreateController' => null,
            'beforeAction' => null
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => FALSE,
            'enableFlashMessages'=>FALSE,
            'enableConfirmation' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin']
        ],
        'house' => [
            'class' => 'frontend\modules\house\house',
        ],
        'map' => [
            'class' => 'frontend\modules\map\map',
        ],

    ]
];
