<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'الأشخاص',
            'group' => 'المحتوى',
        ],
    ],
    'person' => [
        'nav' => [
            'label' => 'الأشخاص',
            'group' => '',
        ],
        'field' => [
            'name' => 'الاسم',
            'title' => 'اللقب',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'bio' => 'السيرة الذاتية',
            'tagline' => 'الشعار',
            'sidebar' => 'الشريط الجانبي',
            'taxonomy' => 'التصنيف',
            'categories' => 'الفئات',
            'avatar' => 'الصورة الشخصية',
            'seo' => 'تحسين محركات البحث',
            'meta' => 'ميتا',
            'slug' => 'المعرف',
            'display_order' => 'ترتيب العرض',
            'created_at' => 'تاريخ الإنشاء',
            'status' => 'الحالة',
            'status_published' => 'منشور',
            'status_draft' => 'مسودة',
        ],
        'info' => [
            'select_categories' => 'اختر الفئات',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'فئات الأشخاص',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
];
