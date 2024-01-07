<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
           'master' => 'c,r,u,d',
           'pendaftaran' => 'c,r,u,d',
           'rawat_jalan' => 'c,r,u,d',
           'rawat_inap' => 'c,r,u,d',
           'farmasi' => 'c,r,u,d',
           'kasir' => 'c,r,u,d',
           'inventori' => 'c,r,u,d',
           'laporan' => 'c,r,u,d',
           'rekam_medis' => 'c,r,u,d',
           'data_transaksi' => 'c,r,u,d',
           'kajian_awal' => 'c,r,u,d',
           'kajian_lanjutan' => 'c,r,u,d',
           'tindakan_medis' => 'c,r,u,d',
           'cppt' => 'c,r,u,d',
           'laboratorium' => 'c,r,u,d',
           'radiologi' => 'c,r,u,d',
           'reset' => 'c,r,u,d',
           'odontogram' => 'c,r,u,d',
           'dokumen_pasien' => 'c,r,u,d',
           'bhp'=> 'c,r,u,d',
        ],
        'dokter' => [
            'rawat_jalan' => 'c,r,u,d',
            'rawat_inap' => 'c,r,u,d',
            'data_transaksi' => 'c,r,u,d',
            'kajian_awal' => 'c,r,u,d',
            'kajian_lanjutan' => 'c,r,u,d',
            'tindakan_medis' => 'c,r,u,d',
            'cppt' => 'c,r,u,d',
            'laboratorium' => 'c,r,u,d',
            'radiologi' => 'c,r,u,d',
            'reset' => 'c,r,u,d',
            'odontogram' => 'c,r,u,d',
            'dokumen_pasien' => 'c,r,u,d',
            'bhp'=> 'c,r,u,d',
        ],
        'fo' => [
            'pendaftaran' => 'c,r,u,d',
            'rekam_medis' => 'c,r,u,d',
        ],
        'farmasi' => [
            'farmasi' => 'c,r,u,d',
            'inventori' => 'c,r,u,d',
        ],
        'bidan' => [
            'rawat_jalan' => 'c,r,u,d',
            'rawat_inap' => 'c,r,u,d',
            'data_transaksi' => 'c,r,u,d',
            'kajian_awal' => 'c,r,u,d',
            'kajian_lanjutan' => 'c,r,u,d',
            'tindakan_medis' => 'c,r,u,d',
            'cppt' => 'c,r,u,d',
            'laboratorium' => 'c,r,u,d',
            'radiologi' => 'c,r,u,d',
            'reset' => 'c,r,u,d',
            'odontogram' => 'c,r,u,d',
            'dokumen_pasien' => 'c,r,u,d',
            'bhp'=> 'c,r,u,d',
        ],
        'perawat' => [
            'rawat_jalan' => 'c,r,u,d',
            'rawat_inap' => 'c,r,u,d',
            'data_transaksi' => 'c,r,u,d',
            'kajian_awal' => 'c,r,u,d',
            'kajian_lanjutan' => 'c,r,u,d',
            'tindakan_medis' => 'c,r,u,d',
            'cppt' => 'c,r,u,d',
            'laboratorium' => 'c,r,u,d',
            'radiologi' => 'c,r,u,d',
            'reset' => 'c,r,u,d',
            'odontogram' => 'c,r,u,d',
            'dokumen_pasien' => 'c,r,u,d',
            'bhp'=> 'c,r,u,d',
        ],
        'laborat' => [
            'rawat_jalan' => 'c,r,u,d',
            'rawat_inap' => 'c,r,u,d',
            'laboratorium' => 'c,r,u,d',
        ],
        'rm' => [
            'rekam_medis' => 'c,r,u,d',
        ],
        'kasir' => [
            'kasir' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
