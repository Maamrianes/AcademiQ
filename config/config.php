<?php

declare(strict_types=1);

/**
 * Application configuration.
 * Adjust database credentials for your environment.
 */
return [
    'db' => [
        'host' => getenv('GPA_DB_HOST') ?: '127.0.0.1',
        'port' => (int) (getenv('GPA_DB_PORT') ?: 3306),
        'name' => getenv('GPA_DB_NAME') ?: 'gpa_db',
        'user' => getenv('GPA_DB_USER') ?: 'gpa_user',
        'pass' => getenv('GPA_DB_PASS') ?: '1234',
        'charset' => 'utf8mb4',
    ],
    'app' => [
        'name' => 'Academic GPA Manager',
        'session_name' => 'GPA_SESSION',
        'session_lifetime' => 1800, // 30 minutes
    ],
];
