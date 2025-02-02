<?php
// use hard coded values when you need to generate entities
// also if entities need to be generated for tenant db, use tenant db config
// in orm_default
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'host'     => getenv('DB_HOST'),                    
                    'user'     => getenv('DB_USER'),
                    'password' => getenv('DB_PASS'),
                    'dbname'   => getenv('DB_NAME'),
                    'port' => getenv('DB_PORT'),
                    'driverOptions' => Array(
                        'CharacterSet' => 'UTF-8'
                    )
                ]
            ],            
        ],        
    ],
];

// return [
//     'doctrine' => [
//         'connection' => [
//             'orm_default' => [
//                 'params' => [
//                     'host'     => '127.0.0.1',                    
//                     'user'     => 'postgres',
//                     'password' => 'password',
//                     'dbname'   => 'MyDB',//'opulent-dev',
//                     'port' => 5432,
//                     'driverOptions' => Array(
//                         'CharacterSet' => 'UTF-8'
//                     )
//                 ]
//             ],          
//         ],   
//     ],
// ];