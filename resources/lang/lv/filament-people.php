<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Cilvēki',
            'group' => 'Saturs',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => 'Cilvēki',
            'group' => '',
        ],
        'field' => [
            'name' => 'Vārds',
            'title' => 'Tituls',
            'email' => 'E-pasts',
            'phone' => 'Tālrunis',
            'bio' => 'Biogrāfija',
            'tagline' => 'Sauklis',
            'sidebar' => 'Sānu josla',
            'taxonomy' => 'Taksonomija',
            'categories' => 'Kategorijas',
            'avatar' => 'Avatars',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Attēlošanas secība',
            'created_at' => 'Izveidots',
            'status' => 'Statuss',
            'status_published' => 'Publicēts',
            'status_draft' => 'Melnraksts',
        ],
        'info' => [
            'select_categories' => 'Izvēlieties kategorijas',
            'duplicate_selected' => 'Dublēt izvēlētos',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Cilvēku kategorijas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Nosaukums',
        ],
    ],
];
