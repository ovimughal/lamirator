<?php

return [
    'oconfig_manager' => [
        'db_region' => [
            'IN' => [
                'host' => '127.0.0.1',
                'port' => '5432',
                'user' => 'postgres',
                'password' => 'Encrypted Password using' //ServiceInjector::oEncryption()->keyEncoder
            ],
            'SA' => [
                'host' => '127.0.01',
                'port' => '5432',
                'user' => 'postgres',
                'password' => 'Encrypted Password using' //ServiceInjector::oEncryption()->keyEncoder
            ]
        ]
    ]
];
