<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'کەسەکان',
            'group' => 'ناوەڕۆک',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'کەسەکان',
        ],
        'nav' => [
            'label' => 'کەسەکان',
            'group' => '',
        ],
        'field' => [
            'name' => 'ناو',
            'title' => 'ناونیشان',
            'email' => 'ئیمەیل',
            'phone' => 'تەلەفۆن',
            'bio' => 'زانیاری',
            'tagline' => 'شعار',
            'sidebar' => 'سایدبار',
            'taxonomy' => 'پۆل',
            'categories' => 'پۆلەکان',
            'avatar' => 'وێنە',
            'seo' => 'SEO',
            'meta' => 'مێتا',
            'slug' => 'ناو',
            'display_order' => 'ڕیزکردنی پیشان',
            'created_at' => 'دروستکراوە',
            'status' => 'دۆخ',
            'status_published' => 'بڵاوکراوە',
            'status_draft' => 'پڕۆژە',
        ],
        'info' => [
            'select_categories' => 'هەڵبژاردنی پۆلەکان',
            'duplicate_selected' => 'دووبارەکردنی هەڵبژاردە',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'پۆلەکانی کەس',
        ],
        'nav' => [
            'label' => 'پۆلەکانی کەس',
            'group' => '',
        ],
        'field' => [
            'title' => 'ناونیشان',
        ],
    ],
];
