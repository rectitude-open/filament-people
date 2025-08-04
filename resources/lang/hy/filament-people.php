<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Մարդիկ',
            'group' => 'Բովանդակություն',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Մարդիկ',
        ],
        'nav' => [
            'label' => 'Մարդիկ',
            'group' => '',
        ],
        'field' => [
            'name' => 'Անուն',
            'title' => 'Պաշտոն',
            'email' => 'Էլ. փոստ',
            'phone' => 'Հեռախոս',
            'bio' => 'Կենսագրություն',
            'tagline' => 'Նշանաբան',
            'sidebar' => 'Կողային վահանակ',
            'taxonomy' => 'Տաքսոնոմիա',
            'categories' => 'Կատեգորիաներ',
            'avatar' => 'Ավատար',
            'seo' => 'SEO',
            'meta' => 'Մետա',
            'slug' => 'Slug',
            'display_order' => 'Ցուցադրման կարգ',
            'created_at' => 'Ստեղծվել է',
            'status' => 'Կարգավիճակ',
            'status_published' => 'Հրապարակված',
            'status_draft' => 'Սևագիր',
        ],
        'info' => [
            'select_categories' => 'Ընտրել կատեգորիաները',
            'duplicate_selected' => 'Կրկնել ընտրվածները',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Մարդկանց կատեգորիաներ',
        ],
        'nav' => [
            'label' => 'Մարդկանց կատեգորիաներ',
            'group' => '',
        ],
        'field' => [
            'title' => 'Վերնագիր',
        ],
    ],
];
