<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '사람',
            'group' => '콘텐츠',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => '사람',
            'group' => '',
        ],
        'field' => [
            'name' => '이름',
            'title' => '직함',
            'email' => '이메일',
            'phone' => '전화번호',
            'bio' => '약력',
            'tagline' => '태그라인',
            'sidebar' => '사이드바',
            'taxonomy' => '분류',
            'categories' => '카테고리',
            'avatar' => '아바타',
            'seo' => 'SEO',
            'meta' => '메타',
            'slug' => '슬러그',
            'display_order' => '표시 순서',
            'created_at' => '생성일',
            'status' => '상태',
            'status_published' => '게시됨',
            'status_draft' => '임시저장',
        ],
        'info' => [
            'select_categories' => '카테고리 선택',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => '사람 카테고리',
            'group' => '',
        ],
        'field' => [
            'title' => '제목',
        ],
    ],
];
