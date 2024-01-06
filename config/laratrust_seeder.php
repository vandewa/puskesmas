<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'dokter' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'fo' => [
            'profile' => 'r,u',
        ],
        'farmasi' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'bidan' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'perawat' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'laborat' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'rm' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'kasir' => [
            'module_1_name' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
