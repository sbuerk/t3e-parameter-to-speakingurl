<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Parameter to Speaking URL',
    'description' => 'Provide middleware to redirect parameter id,type and language to speaking url.',
    'category' => 'fe',
    'author' => 'Stefan Bürk',
    'author_email' => 'stefan@buerk.tech',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.9.99',
            'php' => '7.4.0-8.2.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
