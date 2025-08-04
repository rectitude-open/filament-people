<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'People',
            'group' => 'Content',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'People',
        ],
        'nav' => [
            'label' => 'People',
            'group' => '',
        ],
        'field' => [
            'name' => 'Name',
            'title' => 'Title',
            'email' => 'Email',
            'phone' => 'Phone',
            'bio' => 'Biography',
            'tagline' => 'Tagline',
            'sidebar' => 'Sidebar',
            'taxonomy' => 'Taxonomy',
            'categories' => 'Categories',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Display Order',
            'created_at' => 'Created At',
            'status' => 'Status',
            'status_published' => 'Published',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Select Categories',
            'duplicate_selected' => 'Duplicate Selected',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Person Categories',
        ],
        'nav' => [
            'label' => 'Person Categories',
            'group' => '',
        ],
        'field' => [
            'title' => 'Title',
        ],
    ],
];
