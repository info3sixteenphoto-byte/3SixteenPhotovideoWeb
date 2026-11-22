<?php

return [
    'default' => env('FILESYSTEM_DISK', 'local'),

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        'b2' => [
            'driver' => 's3',
            'key' => env('B2_APPLICATION_KEY_ID'),
            'secret' => env('B2_APPLICATION_KEY'),
            'region' => env('B2_REGION', 'us-west-004'),
            'bucket' => env('B2_BUCKET'),
            'endpoint' => env('B2_ENDPOINT'),
            'use_path_style_endpoint' => env('B2_USE_PATH_STYLE_ENDPOINT', true),
            'throw' => true,
            'report' => true,
        ],
    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],
];
