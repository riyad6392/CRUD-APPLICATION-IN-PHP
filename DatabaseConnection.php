<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "employee_crud");

class DatabaseConnection {
    private static $connection;

    public static function getConnection() {
        if (!isset(self::$connection)) {
            self::$connection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
            if (self::$connection->connect_error) {
                die("Connection failed: " . self::$connection->connect_error);
            }
        }

        return self::$connection;
    }
}

?>

