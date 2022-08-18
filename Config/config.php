<?php

return [
    'name' => 'Tax',

    'menus' => [
        [
            'text'      => 'Tax',
            'route'     => 'admin.Tax.index',
            'icon'      => 'fas fa-fire',
            'order'     => 1,
            'can'       => 'Tax-read'
        ],
    ]
];
