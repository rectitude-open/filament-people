<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '人員',
            'group' => '內容',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => '人員',
            'group' => '',
        ],
        'field' => [
            'name' => '姓名',
            'title' => '職稱',
            'email' => '電子郵件',
            'phone' => '電話',
            'bio' => '簡介',
            'tagline' => '標語',
            'sidebar' => '側邊欄',
            'taxonomy' => '分類',
            'categories' => '類別',
            'avatar' => '頭像',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => '別名',
            'display_order' => '顯示順序',
            'created_at' => '建立時間',
            'status' => '狀態',
            'status_published' => '已發布',
            'status_draft' => '草稿',
        ],
        'info' => [
            'select_categories' => '選擇分類',
            'duplicate_selected' => '複製所選項目',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => '人員類別',
            'group' => '',
        ],
        'field' => [
            'title' => '職稱',
        ],
    ],
];
