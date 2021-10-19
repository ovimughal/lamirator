<?php

return [
    'oconfig_manager' => [
        'settings' => [
            'enable_login' => getenv('ENABLE_LOGIN'),
            'enable_db_acl' => getenv('ENABLE_DB_ACL'),
            'enable_multitenancy' => getenv('ENABLE_MULTITENANCY'),
            'app_development_env' => getenv('APPLICATION_ENV') == 'development' ? true : false,
            //
            //Start-Custom Keys
            'attachment' => 'public/attachments',
            'defaultPhoto' => 'public/img/default',
            'employeePhoto' => 'public/img/employee',
            'userPhoto' => 'public/img/user',
            'companyLogo' => 'public/img/company',
            'tableCSVSamples' => 'public/tableCSVSamples',
            'faImages' => 'public/img/fixedAssets',
            'invtImages' => 'public/img/inventory',
            'customeName1_file_path' => '',
            // End-Custom Keys
        ],
        'entities' => [
            'orm_default_path' => 'Application\Entity',
            'orm_master_path' => 'Login\Entity'
        ]
    ]
];


