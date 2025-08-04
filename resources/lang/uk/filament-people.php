<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Люди',
            'group' => 'Контент',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'Люди',
        ],
        'nav' => [
            'label' => 'Люди',
            'group' => '',
        ],
        'field' => [
            'name' => 'Ім’я',
            'title' => 'Посада',
            'email' => 'Email',
            'phone' => 'Телефон',
            'bio' => 'Біографія',
            'tagline' => 'Слоган',
            'sidebar' => 'Бічна панель',
            'taxonomy' => 'Таксономія',
            'categories' => 'Категорії',
            'avatar' => 'Аватар',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'display_order' => 'Порядок відображення',
            'created_at' => 'Дата створення',
            'status' => 'Статус',
            'status_published' => 'Опубліковано',
            'status_draft' => 'Чернетка',
        ],
        'info' => [
            'select_categories' => 'Виберіть категорії',
            'duplicate_selected' => 'Дублювати вибране',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'Категорії людей',
        ],
        'nav' => [
            'label' => 'Категорії людей',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
];
