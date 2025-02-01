<?php

return [
    'name' => env('APP_NAME', 'PWA'),
    'manifest' => [
        'name' => env('APP_NAME', 'PWA'),
        'short_name' => env('APP_NAME', 'PWA'),
        'start_url' => '/auth',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation' => 'any',
        'status_bar' => 'black-translucent',
        'icons' => [
            '72x72' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/assets/images/icons/icon.webp',
                'purpose' => 'any'
            ],
        ],
        'custom' => []
    ]
];