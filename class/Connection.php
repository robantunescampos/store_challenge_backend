<?php

class Connection
{
    private static $host;
    private static $db;
    private static $user;
    private static $pass;

    public function __construct($host, $db, $user, $pass)
    {
        self::$host = $host;
        self::$db = $db;
        self::$user = $user;
        self::$pass = $pass;
    }

    public static function connMysql()
    {
        try {
            return new PDO('mysql:host='.self::$host.';dbname='.self::$db, self::$user, self::$pass);
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

$conn = new Connection('1', '1', '1', '1');
$conn::connMysql();