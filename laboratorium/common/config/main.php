<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
    	'sms' => [
            'class' => 'app\vendor\LabsMobileSMS\LabsMobileSMS',
            'LMaccount_username'=>'{YOUR USERNAME}',
            'LMaccount_password'=>'{YOUR PASSWORD}',
            'LMaccount_clientapi'=>'{YOUR API CLIENT}',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
