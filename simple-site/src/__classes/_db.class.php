<?php

class db
{
    public static $connection = null;
    private static function create_connection()
    {
        $servername = "database";
        $username = "root";
        $password = "example";
        $db = "lamp";

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public static function get_connection()
    {
        if (db::$connection == null) {
            $conn = db::create_connection();
            db::$connection = $conn;
            return $conn;
        } else {
            return db::$connection;
        }
    }

    public static function select_user($user)
    {
        $sql = "SELECT * FROM `users` WHERE `email`='$user' OR `username`='$user' LIMIT 1";
        $result = db::$connection->query($sql);
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }
}
