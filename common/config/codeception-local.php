<?php

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/main.php',
    require __DIR__ . '/main-local.php',
    require __DIR__ . '/test.php',
    require __DIR__ . '/test-local.php',
    [
        'components' => [
            'request' => [
                'cookieValidationKey' => 'Qu4wjOETdiXYPcOPq6P9E1mfgjgXxDv_',
            ],
        ],
    ]
);
