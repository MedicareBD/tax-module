<?php

return [
    'name' => 'Medicine',
    'menus' => [
        [
            'text' => __('Taxs'),
            'icon' => 'fas fa-hryvnia',
            'can' => 'taxs-read',
            'order' => 12,
            'submenu' => [
                [
                    'text' => __('Tax Settings'),
                    'route' => 'admin.taxs.settings',
                    'can' => 'taxs-settings-read',
                    'order' => 133
                ],
                [
                    'text' => __('Add Income Tax'),
                    'route' => 'admin.taxs.create',
                    'can' => 'taxs-create',
                    'order' => 134
                ],
                [
                    'text' => __('Income Tax List'),
                    'route' => 'admin.taxs.index',
                    'can' => 'taxs-read',
                    'order' => 135
                ],
            ]
        ]
    ]
];
