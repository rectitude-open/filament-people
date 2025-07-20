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
        'nav' => [
            'label' => 'Люди',
            'group' => '',
        ],
        'field' => [
            'name' => 'Имя',
            'title' => 'Заголовок',
            'email' => 'Email',
            'phone' => 'Телефон',
            'bio' => 'Биография',
            'tagline' => 'Слоган',
            'sidebar' => 'Боковая панель',
            'taxonomy' => 'Таксономия',
            'categories' => 'Категории',
            'avatar' => 'Аватар',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'display_order' => 'Порядок отображения',
            'created_at' => 'Дата создания',
            'status' => 'Статус',
            'status_published' => 'Опубликовано',
            'status_draft' => 'Черновик',
        ],
        'info' => [
            'select_categories' => 'Выберите категории',
            'duplicate_selected' => 'Дублировать выбранные',
        ],
    ],
    'person_category' => [
        'nav' => [
            'label' => 'Категории людей',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
];
