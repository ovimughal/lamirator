<?php
/**
 * The below GL, INVT etc is an example. You can name anything you want.
 * Your key name can be anything e.g 'BASIC', 'STANDARD' etc & then you can add all the 
 * modules to BASIC & so on to STANDARD & depending upon which plan a user subscries to
 * he will be able to access the respective modules
 */
return [
    'oconfig_manager' => [
        'licensedModules' => [
            'GL' => [
                'ChartOfAccounts',
                'Customers',
                'Vendors',
            ],
            'INVT' => [
                'StockItemINVT',
                'InventoryAdjustmentINVT',
            ],
            'POS' => [
                'LoyaltyProgramPOS',
                'CashInOutPOS',
            ],
            'FA' => [
                'AssetAcquisitionFA',
                'AssetSettingFA',
            ]
        ]
    ]
];
