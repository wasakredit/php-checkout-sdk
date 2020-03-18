<?php
function wasa_config($key = '')
{
    $wasa_uri = getenv('WASA_URI');
    $wasa_auth_uri = getenv('WASA_AUTH_URI');

    $wasa_configuration = [
        'base_url' => $wasa_uri == false ? 'https://b2b.services.wasakredit.se' : $wasa_uri,
        'access_token_url' => $wasa_auth_uri == false ? 'https://b2b.services.wasakredit.se/auth/connect/token' : $wasa_uri,
        'version' => 'php-2.5',
        'plugin' => null
    ];

    return isset($wasa_configuration[$key]) ? $wasa_configuration[$key] : null;
}
