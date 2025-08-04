<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Osoby',
            'group' => 'Treść',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Osoby',
        ],
        'nav' => [
            'label' => 'Osoby',
            'group' => '',
        ],
        'field' => [
            'name' => 'Imię',
            'title' => 'Stanowisko',
            'email' => 'Email',
            'phone' => 'Telefon',
            'bio' => 'Biografia',
            'tagline' => 'Slogan',
            'sidebar' => 'Panel boczny',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategorie',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Kolejność wyświetlania',
            'created_at' => 'Utworzono',
            'status' => 'Status',
            'status_published' => 'Opublikowano',
            'status_draft' => 'Szkic',
        ],
        'info' => [
            'select_categories' => 'Wybierz kategorie',
            'duplicate_selected' => 'Duplikuj wybrane',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Kategorie osób',
        ],
        'nav' => [
            'label' => 'Kategorie osób',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
        ],
    ],
];
