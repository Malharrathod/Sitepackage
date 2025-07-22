<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage',
    'description' => 'Typo3 Scss to css',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Malhar\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sitepackage',
    'author_email' => 'rathodm1996@gmail.com',
    'author_company' => 'Malhar',
    'version' => '1.0.0',
];
