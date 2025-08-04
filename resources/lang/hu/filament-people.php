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
        'resource' => [
            'label' => 'Személyek',
        ],
        'nav' => [
            'label' => 'Személyek',
            'group' => '',
        ],
        'field' => [
            'name' => 'Név',
            'title' => 'Beosztás',
            'email' => 'Email',
            'phone' => 'Telefon',
            'bio' => 'Bemutatkozás',
            'tagline' => 'Szlogen',
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
            'duplicate_selected' => 'Kijelöltek másolása',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Személy kategóriák',
        ],
        'nav' => [
            'label' => 'Személy kategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
];
