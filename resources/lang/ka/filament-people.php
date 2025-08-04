<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'პირები',
            'group' => 'შინაარსი',
        ],
    ],
    'person' => [
        'resource' => [
            'label' => 'პირები',
        ],
        'nav' => [
            'label' => 'პირები',
            'group' => '',
        ],
        'field' => [
            'name' => 'სახელი',
            'title' => 'თანამდებობა',
            'email' => 'ელ.ფოსტა',
            'phone' => 'ტელეფონი',
            'bio' => 'ბიოგრაფია',
            'tagline' => 'სლოგანი',
            'sidebar' => 'გვერდითი პანელი',
            'taxonomy' => 'ტაქსონომია',
            'categories' => 'კატეგორიები',
            'avatar' => 'ავატარი',
            'seo' => 'SEO',
            'meta' => 'მეტა',
            'slug' => 'სლაგი',
            'display_order' => 'ჩვენების რიგი',
            'created_at' => 'შექმნის თარიღი',
            'status' => 'სტატუსი',
            'status_published' => 'გამოქვეყნებული',
            'status_draft' => 'მონახაზი',
        ],
        'info' => [
            'select_categories' => 'აირჩიეთ კატეგორიები',
            'duplicate_selected' => 'დუბლირება არჩეული',
        ],
    ],
    'person_category' => [
        'resource' => [
            'label' => 'პირთა კატეგორიები',
        ],
        'nav' => [
            'label' => 'პირთა კატეგორიები',
            'group' => '',
        ],
        'field' => [
            'title' => 'სათაური',
        ],
    ],
];
