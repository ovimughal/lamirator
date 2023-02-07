<?php
use Doctrine\DBAL\Driver\PDOPgSql\Driver as PDOPgSql;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => PDOPgSql::class,
            ],          
        ],         
    ],
];

// Comment above & uncomment below portion to work with MySql
// use Doctrine\DBAL\Driver\PDOMySql\Driver as PDOMySqlDriver;

// return [
//     'doctrine' => [
//         'connection' => [
//             'orm_default' => [
//                 'driverClass' => PDOMySqlDriver::class,
//             ],            
//         ],         
//     ],
// ];
