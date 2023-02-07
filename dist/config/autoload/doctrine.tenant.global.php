<?php
use Doctrine\DBAL\Driver\PDOPgSql\Driver as PDOPgSql;

return [
    'doctrine' => [
        'connection' => [  
            'orm_tenant' => [
                'driverClass' => PDOPgSql::class,
            ],         
        ],
        'entitymanager' => [
            'orm_tenant' => [
                'connection' => 'orm_tenant',
                'configuration' => 'orm_tenant',
            ]
        ],
        'configuration' => [
            'orm_tenant' => [
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'hydration_cache' => 'array',
                'driver' => 'orm_tenant_chain',
                'generate_proxies' => true,
                'proxy_dir' => 'data/DoctrineORMModule/Proxy',
                'proxy_namespace' => 'DoctrineORMModule\\Proxy',
            ]
        ],         
    ],
];
