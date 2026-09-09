<?php

return [
    'restrict_to_allowed_ips' => (bool) env('RESTRICT_TO_ALLOWED_IPS', false),
    'allowed_ips' => array_values(array_filter(array_map(
        'trim',
        explode(',', (string) env('ALLOWED_IPS', '127.0.0.1')),
    ))),
];
