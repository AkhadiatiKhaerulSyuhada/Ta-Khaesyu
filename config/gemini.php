<?php

declare(strict_types=1);

return [
    /**
     * Gemini API Key
     *
     * You will need an API key to access the Gemini API.
     * You can obtain it from Google AI Studio ( https://makersuite.google.com/ )
     */
    'api_key' => env('AIzaSyBpVCMi1X6CSIl7Ia7t5Rp-DIGXFWCbcug'),

    /**
     * Gemini Base URL
     *
     * If you need a specific base URL for the Gemini API, you can provide it here.
     * Otherwise, leave empty to use the default value.
     */
    'base_url' => env('https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent'),
];
