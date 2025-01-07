<?php

return [
    'oconfig_manager' => [
        'settings' => [
            'java_bridge' =>  getenv('TOMCAT_HOST').':'. getenv('TOMCAT_PORT').'/JavaBridge/java/Java.inc',
            'dbms' => getenv('TENANT_DBMS'),
            'dbms_server' => getenv('TENANT_DB_HOST').':'.getenv('TENANT_DB_PORT'),
            'data_base_name' => getenv('TENANT_DB_NAME'),
            'data_base_user' => getenv('TENANT_DB_USER'),
            'data_base_password' => getenv('TENANT_DB_PASS'),
            'reporting_templates_en' => 'public/reporting/templates',
            'reporting_templates_ar' => 'public/reporting/templates_ar',
            'reporting_output'  => 'public/reporting/output',
            'reporting_templates_img_output' => 'public/reporting/templates_img_output',
            'output_file_name' => 'report',
            'reporting_file_download_route' =>  getenv('API_URL').'/download/reporting_output',
            'reporting_file_img_download_route' =>  getenv('API_URL').'/download/reporting_templates_img_output',
            'pdf_template_source' => 'public/reporting/input' // This one is for taking pdf input & write on top of it
        ]
    ]
];

