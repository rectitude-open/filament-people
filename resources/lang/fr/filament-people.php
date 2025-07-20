<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Personnes',
            'group' => 'Contenu',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => 'Personnes',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nom',
            'title' => 'Titre',
            'email' => 'Email',
            'phone' => 'Téléphone',
            'bio' => 'Biographie',
            'tagline' => 'Slogan',
            'sidebar' => 'Barre latérale',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Catégories',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordre d’affichage',
            'created_at' => 'Créé le',
            'status' => 'Statut',
            'status_published' => 'Publié',
            'status_draft' => 'Brouillon',
        ],
        'info' => [
            'select_categories' => 'Sélectionner les catégories',
            'duplicate_selected' => 'Dupliquer la sélection',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Catégories de personnes',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
        ],
    ],
];
