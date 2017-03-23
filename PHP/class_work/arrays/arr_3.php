<?php

$menu_list = [
    'home' => [
            'link' => '/',
            'title' => 'Главная страница'
    ],
    'about' => [
        'link' => '/about',
        'title' => 'О нас'
    ],
    'contact' => [
        'link' => '/contact',
        'title' => 'Контакты'
    ],
    'profile' => [
        'link' => '/profile',
        'title' => 'Профиль'
    ]
];

foreach ($menu_list as $list) {
    echo "<a href='{$list['link']}'>{$list['title']}</a> ";
}