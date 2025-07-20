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
        'nav' => [
            'label' => 'Kişiler',
            'group' => '',
        ],
        'field' => [
            'name' => 'Ad',
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
            'display_order' => 'Görüntüleme Sırası',
            'created_at' => 'Oluşturulma Tarihi',
            'status' => 'Durum',
            'status_published' => 'Yayınlandı',
            'status_draft' => 'Taslak',
        ],
        'info' => [
            'select_categories' => 'Kategorileri seçin',
            'duplicate_selected' => 'Seçilenleri çoğalt',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Kişi Kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
];
