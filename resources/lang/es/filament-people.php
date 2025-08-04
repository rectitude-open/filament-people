<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Personas',
            'group' => 'Contenido',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Personas',
        ],
        'nav' => [
            'label' => 'Personas',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nombre',
            'title' => 'Cargo',
            'email' => 'Correo electrónico',
            'phone' => 'Teléfono',
            'bio' => 'Biografía',
            'tagline' => 'Lema',
            'sidebar' => 'Barra lateral',
            'taxonomy' => 'Taxonomía',
            'categories' => 'Categorías',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Orden de visualización',
            'created_at' => 'Creado en',
            'status' => 'Estado',
            'status_published' => 'Publicado',
            'status_draft' => 'Borrador',
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorías',
            'duplicate_selected' => 'Duplicar seleccionados',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Categorías de personas',
        ],
        'nav' => [
            'label' => 'Categorías de personas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
