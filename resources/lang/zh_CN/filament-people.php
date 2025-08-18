<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '人员',
            'group' => '内容',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => '人员',
        ],
        'nav' => [
            'label' => '人员',
            'group' => '',
        ],
        'field' => [
            'name' => '姓名',
            'title' => '头衔',
            'email' => '邮箱',
            'phone' => '电话',
            'bio' => '简介',
            'tagline' => '标语',
            'sidebar' => '侧边栏',
            'taxonomy' => '分类法',
            'categories' => '分类',
            'avatar' => '头像',
            'seo' => 'SEO',
            'meta' => '元数据',
            'slug' => '别名',
            'display_order' => '显示顺序',
            'created_at' => '创建时间',
            'status' => '状态',
            'status_published' => '已发布',
            'status_draft' => '草稿',
        ],
        'info' => [
            'select_categories' => '选择分类',
            'duplicate_selected' => '复制所选项',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => '人员分类',
        ],
        'nav' => [
            'label' => '人员分类',
            'group' => '',
        ],
        'field' => [
            'title' => '标题',
        ],
    ],
];
