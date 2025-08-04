<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Persoane',
            'group' => 'Conținut',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Persoane',
        ],
        'nav' => [
            'label' => 'Persoane',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nume',
            'title' => 'Funcție',
            'email' => 'Email',
            'phone' => 'Telefon',
            'bio' => 'Biografie',
            'tagline' => 'Slogan',
            'sidebar' => 'Bară laterală',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Categorii',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordine de afișare',
            'created_at' => 'Creat la',
            'status' => 'Stare',
            'status_published' => 'Publicat',
            'status_draft' => 'Ciornă',
        ],
        'info' => [
            'select_categories' => 'Selectați categorii',
            'duplicate_selected' => 'Duplică selecția',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Categorii de persoane',
        ],
        'nav' => [
            'label' => 'Categorii de persoane',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titlu',
        ],
    ],
];
