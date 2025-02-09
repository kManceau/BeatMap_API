<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define which routes should allow CORS

    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => ['*'], // Allow requests from all domains (Use specific domains in production)

    'allowed_origins_patterns' => [], // Define patterns to match allowed origins (if needed)

    'allowed_headers' => ['*'], // Allow all headers (Set specific headers if necessary)

    'exposed_headers' => [], // Headers that browsers are allowed to access

    'max_age' => 0, // Define cache duration for preflight requests (0 = no caching)

    'supports_credentials' => false, // Set to `true` if using authentication (cookies, sessions, etc.)

];
