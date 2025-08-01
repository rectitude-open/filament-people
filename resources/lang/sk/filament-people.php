<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Osoby',
            'group' => 'Obsah',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => 'Osoby',
            'group' => '',
        ],
        'field' => [
            'name' => 'Meno',
            'title' => 'Titul',
            'email' => 'Email',
            'phone' => 'Telefón',
            'bio' => 'Životopis',
            'tagline' => 'Slogan',
            'sidebar' => 'Bočný panel',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategórie',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Poradie zobrazenia',
            'created_at' => 'Vytvorené',
            'status' => 'Stav',
            'status_published' => 'Publikované',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
            'duplicate_selected' => 'Duplikovať vybrané',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Kategórie osôb',
            'group' => '',
        ],
        'field' => [
            'title' => 'Názov',
        ],
    ],
];
