<?php

return [
    'email' => 'Некорректный адрес электронной почты',
    'custom' => [
        'email' => [
            'required' => 'Введите адрес электронной почты',
        ],
        'password' => [
            'required' => 'Введите пароль',
            'min' => 'Длина пароля должна быть не менее :min символов',
            'confirmed' => 'Пароль и подтверждение пароля не совпадают'
        ],
        'name' => [
            'required' => 'Введите имя',
        ],
    ],
];