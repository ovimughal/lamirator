<?php

return [
    'oconfig_manager' => [
        'ojwt' => [
            'jwt_key' => getenv('TOKEN_KEY'), //base64_encode(openssl_random_pseudo_bytes(64]],
            'algo' => 'HS512',
            'gsf_key' => getenv('GSF_TOKEN_KEY'),
            'gsf_algo' => 'RS256',
            'server' => getenv('API_URL') . '/',
            'iatOffset' => getenv('TOKEN_OFFSET'),
            'expOffset' => getenv('TOKEN_EXPIRY') //+ above 10 = 3600 => 1 hr
        ],
        // Routes which can be accessed without identity token i.e no login is required
        'open_identity_routes' => [
            'login',
            'signup',
            'acceptinvitation',
            'forgotpassword',
            'reminders_cron',
            'recurringsalesinvoiceinvt_cron'
        ],
        // Routes for which identity token is required but don't need ACL check.
        'open_access_routes' => [
            'token_reissue',
            'app_globals'
        ],
        // Routes for which identity token is required but the provided token
        // is from SSO/Identity Provider 
        'sso_routes' => [
            'sso'
        ],
        // Routes which are completely open, no API key, no token, no ACL
        'open_public_routes' => [
            'application',
        ]
    ]
];
