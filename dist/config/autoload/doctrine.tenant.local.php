<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_tenant' => [
                'params' => [
                    'host'     => getenv('TENANT_DB_HOST'),                    
                    'user'     => getenv('TENANT_DB_USER'),
                    'password' => getenv('TENANT_DB_PASS'),
                    'dbname'   => getenv('TENANT_DB_NAME'),
                    'port' => getenv('TENANT_DB_PORT'),
                    'driverOptions' => Array(
                        'CharacterSet' => 'UTF-8'
                    )
                ]
            ],            
        ],        
    ],
];