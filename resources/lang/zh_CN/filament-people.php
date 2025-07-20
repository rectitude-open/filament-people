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
            'taxonomy' => '分类',
            'categories' => '类别',
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
            'select_categories' => '选择类别',
            'duplicate_selected' => '复制所选项',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => '人员类别',
            'group' => '',
        ],
        'field' => [
            'title' => '头衔',
        ],
    ],
];
