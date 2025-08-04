<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'افراد',
            'group' => 'محتوا',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'افراد',
        ],
        'nav' => [
            'label' => 'افراد',
            'group' => '',
        ],
        'field' => [
            'name' => 'نام',
            'title' => 'سمت',
            'email' => 'ایمیل',
            'phone' => 'تلفن',
            'bio' => 'بیوگرافی',
            'tagline' => 'شعار',
            'sidebar' => 'سایدبار',
            'taxonomy' => 'رده‌بندی',
            'categories' => 'دسته‌بندی‌ها',
            'avatar' => 'آواتار',
            'seo' => 'سئو',
            'meta' => 'متا',
            'slug' => 'نامک',
            'display_order' => 'ترتیب نمایش',
            'created_at' => 'تاریخ ایجاد',
            'status' => 'وضعیت',
            'status_published' => 'منتشر شده',
            'status_draft' => 'پیش‌نویس',
        ],
        'info' => [
            'select_categories' => 'انتخاب دسته‌بندی‌ها',
            'duplicate_selected' => 'تکرار انتخاب‌شده‌ها',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'دسته‌بندی افراد',
        ],
        'nav' => [
            'label' => 'دسته‌بندی افراد',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
        ],
    ],
];
