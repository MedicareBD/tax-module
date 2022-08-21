<?php

return [
    'name' => 'Medicine',
    'menus' => [
        [
            'text' => __('Taxes'),
            'icon' => 'fas fa-hryvnia',
            'can' => 'taxes-read',
            'order' => 12,
            'submenu' => [
                [
                    'text' => __('Tax Settings'),
                    'route' => 'admin.taxes.settings',
                    'can' => 'taxes-settings-read',
                    'order' => 133
                ],
                [
                    'text' => __('Add Income Tax'),
                    'route' => 'admin.taxes.create',
                    'can' => 'taxes-create',
                    'order' => 134
                ],
                [
                    'text' => __('Income Tax List'),
                    'route' => 'admin.taxes.index',
                    'can' => 'taxes-read',
                    'order' => 135
                ],
            ]
        ]
    ]
];
