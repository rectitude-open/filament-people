<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Pessoas',
            'group' => 'Conteúdo',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Pessoas',
        ],
        'nav' => [
            'label' => 'Pessoas',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nome',
            'title' => 'Cargo',
            'email' => 'Email',
            'phone' => 'Telefone',
            'bio' => 'Biografia',
            'tagline' => 'Slogan',
            'sidebar' => 'Barra lateral',
            'taxonomy' => 'Taxonomia',
            'categories' => 'Categorias',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordem de exibição',
            'created_at' => 'Criado em',
            'status' => 'Status',
            'status_published' => 'Publicado',
            'status_draft' => 'Rascunho',
        ],
        'info' => [
            'select_categories' => 'Selecionar categorias',
            'duplicate_selected' => 'Duplicar selecionados',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Categorias de pessoas',
        ],
        'nav' => [
            'label' => 'Categorias de pessoas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
