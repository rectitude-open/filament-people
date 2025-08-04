<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '人物',
            'group' => 'コンテンツ',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => '人物',
        ],
        'nav' => [
            'label' => '人物',
            'group' => '',
        ],
        'field' => [
            'name' => '名前',
            'title' => '役職',
            'email' => 'メール',
            'phone' => '電話',
            'bio' => '略歴',
            'tagline' => 'キャッチコピー',
            'sidebar' => 'サイドバー',
            'taxonomy' => '分類',
            'categories' => 'カテゴリ',
            'avatar' => 'アバター',
            'seo' => 'SEO',
            'meta' => 'メタ',
            'slug' => 'スラッグ',
            'display_order' => '表示順',
            'created_at' => '作成日',
            'status' => 'ステータス',
            'status_published' => '公開済み',
            'status_draft' => '下書き',
        ],
        'info' => [
            'select_categories' => 'カテゴリを選択',
            'duplicate_selected' => '選択項目を複製',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => '人物カテゴリ',
        ],
        'nav' => [
            'label' => '人物カテゴリ',
            'group' => '',
        ],
        'field' => [
            'title' => 'タイトル',
        ],
    ],
];
