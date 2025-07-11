<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Személyek',
            'group' => 'Tartalom',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => 'Személyek',
            'group' => '',
        ],
        'field' => [
            'name' => 'Név',
            'title' => 'Titulus',
            'email' => 'Email',
            'phone' => 'Telefon',
            'bio' => 'Bemutatkozás',
            'tagline' => 'Jelmondat',
            'sidebar' => 'Oldalsáv',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategóriák',
            'avatar' => 'Profilkép',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Megjelenítési sorrend',
            'created_at' => 'Létrehozva',
            'status' => 'Állapot',
            'status_published' => 'Közzétéve',
            'status_draft' => 'Vázlat',
        ],
        'info' => [
            'select_categories' => 'Kategóriák kiválasztása',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Személykategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
];
