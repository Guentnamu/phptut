<?php

return [
    'database' => [
        'name' => 'phptut',
        'username' => 'root',
        'password' => '8980',
        'connection' => 'mysql:host=localhost:3306',
        'option' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];