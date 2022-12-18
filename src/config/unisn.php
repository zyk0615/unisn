<?php

return [
    'pattern' => env('UNI_SN_PATTERN', 0),


    'interval_symbol' => env('UNI_SN_INTERVAL_SYMBOL', '_'),
    'max_length' => env('UNI_SN_MAX_LENGTH', 128),
    'date_format' => env('UNI_SN_DATE_FORMAT', 'Ymd'),

    'default' => [
        'factory_type' => env('UNI_SN_FACTORY_TYPE', 0),
        'table' => env('UNI_SN_TABLE', ''),
        'column' => env('UNI_SN_COLUMN', ''),
        'prefix' => env('UNI_SN_PREFIX', 'SN'),
        'pad_length' => env('UNI_SN_PAD_LENGTH', 1),
    ],
];
