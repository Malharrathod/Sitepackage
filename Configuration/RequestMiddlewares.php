<?php

return [
    'frontend' => [
        'sitepackage/scss-auto-compile' => [
            'target' => \Malhar\Sitepackage\Middleware\ScssAutoCompileMiddleware::class,
            'after' => [
                'typo3/cms-frontend/site'
            ],
        ],
    ],
];
