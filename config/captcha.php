<?php

return [
    'characters' => ['a', 'b', 'c', 'd','e'],
    'default' => [
        'length' => 3,
        'width' => 80,
        'height' => 36,
        'quality' => 90,
        'math' => false,
        'expire' => 60,
        'encrypt' => true,
        'bgColor'   => '#ffffff',
        'fontColors'=> ['#f44336'],
    ],
    'math' => [
        'length' => 3,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'math' => true,
    ],

    'flat' => [
        'length' => 3,
        'width' => 80,
        'height' => 36,
        'quality' => 90,
        'lines' => 6,
        'bgImage' => false,
        'bgColor'   => '#ffffff',
        'fontColors'=> ['#f44336'],
        'contrast' => -5,
    ],
    'mini' => [
        'length' => 3,
        'width' => 60,
        'height' => 32,
    ],
    'inverse' => [
        'length' => 3,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'sensitive' => true,
        'angle' => 12,
        'sharpen' => 10,
        'blur' => 2,
        'invert' => true,
        'contrast' => -5,
    ]
];
