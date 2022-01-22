<?php

namespace MGGFLOW\VKFlow\Entities;

class ProfileRang
{
    static array $rangTable = [
        0 => [
            'name' => 'General',
            'description' => 'VK profile belongs directly to MGGFLOW.',
            'lvl' => 77,
        ],
        1 => [
            'name' => 'Diplomat',
            'description' => 'VK profile belongs to Important Person.',
            'lvl' => 66,
        ],
        2 => [
            'name' => 'Scout',
            'description' => 'VK profile belongs to Committent.',
            'lvl' => 55,
        ],
        3 => [
            'name' => 'Stray',
            'description' => 'VK profile belongs to MGGFLOW, but SIM isn`t available.',
            'lvl' => 44,
        ],
        4 => [
            'name' => 'Mercenary',
            'description' => 'VK profile belongs to someone unknown.',
            'lvl' => 33,
        ],
    ];
}