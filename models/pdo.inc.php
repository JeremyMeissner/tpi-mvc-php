<?php
require(__DIR__ . '/constants.inc.php');

class Pdo
{
    static $db = null;

    private function __construct()
    {
        Pdo::$db = new PDO('mysql:host=' . SERVER . ';dbname=' . SCHEMA . ';charset=utf8', USER, PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false));
    }

    private function __destruct()
    {
        Pdo::$db = null;
    }
    public static function getInstance()
    {
        if (self::$db == null) {
            self::$db = new Pdo();
        }
        return self::$db;
    }
}
