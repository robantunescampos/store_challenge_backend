<?php

use Firebase\JWT\JWT;
require 'vendor/autoload.php';
require 'env.php';

class Payload
{
    private static $email;

    public function __construct($email)
    {
        self::$email = $email;
        self::bearerToken();
    }

    private static function bearerToken()
    {
        $payload = array(
            "iss" => "http://example.org",
            "aud" => "http://example.com",
            "email" => self::$email,
            "iat" => 1356999524,
            "nbf" => 1357000000
        );

        echo json_encode(array("bearerToken" => JWT::encode($payload, PAYLOAD_KEY)));
    }
}
