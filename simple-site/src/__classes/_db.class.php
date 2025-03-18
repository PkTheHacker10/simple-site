<?php

class db
{
    private $connection = null;
    public static function create_connection()
    {
        $servername = "database";
        $username = "root";
        $password = "example";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}
