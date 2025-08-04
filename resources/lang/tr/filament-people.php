<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Kişiler',
            'group' => 'İçerik',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Kişiler',
        ],
        'nav' => [
            'label' => 'Kişiler',
            'group' => '',
        ],
        'field' => [
            'name' => 'Adı',
            'title' => 'Ünvan',
            'email' => 'E-posta',
            'phone' => 'Telefon',
            'bio' => 'Biyografi',
            'tagline' => 'Slogan',
            'sidebar' => 'Yan panel',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategoriler',
            'avatar' => 'Avatar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Görüntüleme sırası',
            'created_at' => 'Oluşturulma tarihi',
            'status' => 'Durum',
            'status_published' => 'Yayınlandı',
            'status_draft' => 'Taslak',
        ],
        'info' => [
            'select_categories' => 'Kategorileri seç',
            'duplicate_selected' => 'Seçilenleri çoğalt',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Kişi kategorileri',
        ],
        'nav' => [
            'label' => 'Kişi kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
];
