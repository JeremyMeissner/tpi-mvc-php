<?php
require_once(ROOT . 'models/config/constants.inc.php');

class CustomPDO
{
    private static $PDOInstance = null;

    private static $CustomPDOInstance = null;

    private function __construct()
    {
        self::$PDOInstance = new PDO('mysql:host=' . SERVER . ';dbname=' . SCHEMA . ';charset=utf8', USER, PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false));
    }

    public function __destruct()
    {
        self::$PDOInstance = null;
        self::$CustomPDOInstance = null;
    }
    public static function getInstance()
    {
        if (self::$PDOInstance == null) {
            self::$CustomPDOInstance = new self;
        }
        return self::$PDOInstance;
    }
}
