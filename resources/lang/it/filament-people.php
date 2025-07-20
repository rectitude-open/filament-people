<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Persone',
            'group' => 'Contenuto',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => 'Persone',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nome',
            'title' => 'Titolo',
            'email' => 'Email',
            'phone' => 'Telefono',
            'bio' => 'Biografia',
            'tagline' => 'Slogan',
            'sidebar' => 'Barra laterale',
            'taxonomy' => 'Tassonomia',
            'categories' => 'Categorie',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordine di visualizzazione',
            'created_at' => 'Creato il',
            'status' => 'Stato',
            'status_published' => 'Pubblicato',
            'status_draft' => 'Bozza',
        ],
        'info' => [
            'select_categories' => 'Seleziona categorie',
            'duplicate_selected' => 'Duplica selezionati',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Categorie di persone',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
        ],
    ],
];
