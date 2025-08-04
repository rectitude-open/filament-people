<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Persona',
            'group' => 'Përmbajtje',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Persona',
        ],
        'nav' => [
            'label' => 'Persona',
            'group' => '',
        ],
        'field' => [
            'name' => 'Emri',
            'title' => 'Pozicioni',
            'email' => 'Email',
            'phone' => 'Telefoni',
            'bio' => 'Biografia',
            'tagline' => 'Motoja',
            'sidebar' => 'Paneli anësor',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategoritë',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Renditja e shfaqjes',
            'created_at' => 'Krijuar më',
            'status' => 'Statusi',
            'status_published' => 'Publikuar',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Zgjidh kategoritë',
            'duplicate_selected' => 'Dupliko të zgjedhurat',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Kategoritë e personave',
        ],
        'nav' => [
            'label' => 'Kategoritë e personave',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titulli',
        ],
    ],
];
