<?php

return [
    'oconfig_manager' => [
        'settings' => [
            'file_download_route' => getenv('API_URL').'/download/attachment',
            'user_photo_route' => getenv('API_URL').'/download/userPhoto',
            'default_photo_route' => getenv('API_URL').'/download/defaultPhoto',
            'company_logo_route' => getenv('API_URL').'/download/companyLogo',
            'table_csv_sample_route' => getenv('API_URL').'/download/tableCSVSamples',
            'fa_images_route' => getenv('API_URL').'/download/faImages',
            'invt_images_route' => getenv('API_URL').'/download/invtImages',
            'employee_photo_route' => getenv('API_URL').'/download/employeePhoto',
            'file_server' => getenv('API_URL').'/',
            'filePath' => 'public/img',
            'remoteFilePath' => 'img/',
            'customeName2_file_path' => 'img/customeName2/'
        ]
    ]
];
