<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Orang',
            'group' => 'Konten',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Orang',
        ],
        'nav' => [
            'label' => 'Orang',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nama',
            'title' => 'Jabatan',
            'email' => 'Email',
            'phone' => 'Telepon',
            'bio' => 'Biografi',
            'tagline' => 'Slogan',
            'sidebar' => 'Sidebar',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategori',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Urutan Tampil',
            'created_at' => 'Dibuat Pada',
            'status' => 'Status',
            'status_published' => 'Dipublikasikan',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Pilih Kategori',
            'duplicate_selected' => 'Duplikat yang Dipilih',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Kategori Orang',
        ],
        'nav' => [
            'label' => 'Kategori Orang',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
];
