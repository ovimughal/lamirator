<?php

return [
    'oconfig_manager' => [
        'settings' => [
            'enable_email' => getenv('ENABLE_EMAIL'),
            'invitation_expiry' => getenv('INVITATION_LINK_EXPIRY'),
            'password_code_expiry' => getenv('PASS_CODE_EXPIRY'),
            'email_host' => getenv('EMAIL_HOST'),
            'email_port' => getenv('EMAIL_PORT'),
            'email_from' => getenv('EMAIL_FROM'),
            'email_con_user' => getenv('EMAIL_CONNECTION_USER'),
            'email_con_pass' => getenv('EMAIL_CONNECTION_PASS'),
            'enable_ssl' => getenv('ENABLE_SSL'),
            'ssl_type' => getenv('SSL_TYPE'),
            'invitation_server_url' => getenv('INVITATION_URL'),
            'email_templates' => 'public/emailTemplate',
        ]
    ]
];
