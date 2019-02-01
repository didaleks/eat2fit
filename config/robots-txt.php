<?php
return [
    'paths' => [
        'production' => [
            '*' => [
                ''
            ]
        ],
        'staging' => [
            '*' => [
                '/'
            ]
        ],
        'local' => [
            '*' => [
                ''
            ],
            'smth' => [
                '/admin',
                '/images'
            ]
        ]
    ]
];