<?php

return [
    'oconfig_manager' => [
        'settings' => [
            'enable_multitenancy' => getenv('ENABLE_MULTITENANCY'),
            'app_url' => getenv('APP_URL').'/'.'#/',
            'api_url' => getenv('API_URL').'/',
        ],
        'tenant' => [
            'tenant_id_name' => 'organization_id',
            'tenant_provider' => 'GlobalProcedure\Service\Tenant\TenantProvider',
        ],
    ]
];


