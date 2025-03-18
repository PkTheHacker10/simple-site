<?php

class db
{
    public static $connection = null;
    private static function create_connection()
    {
        $servername = "database";
        $username = "root";
        $password = "example";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public static function get_connection()
    {
        if (db::$connection == null) {
            $conn = db::create_connection();
            print("Creating New connection");
            db::$connection = $conn;
            return $conn;
        } else {
            print("Returning Old connection");
            return db::$connection;
        }
    }
}
