<?php

return [
  // Версия API
    'api_version' => env('API_VERSION', 'v1'),

    // personal client для авторизации
    'personal_client_id' => env('PERSONAL_CLIENT_ID', 1),
    'personal_client_key' => env('PERSONAL_CLIENT_SECRET', ''),
    // password client для авторизации
    'password_client_id' => env('PASSWORD_CLIENT_ID', 2),
    'password_client_secret' => env('PASSWORD_CLIENT_SECRET', ''),
];
