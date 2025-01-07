<?php
/**
 * The below config is for logging via Monolog & gives options how we want to 
 * output the logs e.g to JSON format, send as email or notify Microsoft Teams
 */
return [
    'oconfig_manager' => [
        'logs' => [
            'log_channel' => getenv('LOG_CHANNEL'),
            'log_filename' => getenv('LOG_FILENAME'),
            'log_file_path' => getenv('LOG_FILE_PATH'),
            'is_absolute_path' => getenv('IS_ABSOLUTE_PATH'),
            'log_enable_json_format' => getenv('LOG_ENABLE_JSON_FORMAT'),
            'enable_email_notification' => getenv('ENABLE_EMAIL_NOTIFICATION'),
            'log_notification_email_to' => getenv('LOG_NOTIFICATION_EMAIL_TO'),
            'log_notification_email_from' => getenv('LOG_NOTIFICATION_EMAIL_FROM'),
            'log_notification_email_subject' => getenv('LOG_NOTIFICATION_EMAIL_SUBJECT'),
            'enable_teams_notification' => getenv('ENABLE_TEAMS_NOTIFICATION'),
            'verify_ssl_host' => getenv('VERIFY_SSL_HOST'),
            'teams_channel_webhook' => getenv('TEAMS_CHANNEL_WEBHOOK')
        ],
    ]
];
