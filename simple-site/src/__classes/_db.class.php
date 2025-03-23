<?php

class db
{
    public static $connection = null;

    /**
     * This function takes no arguments and returns a new connection.
     *
     * 
     * @return object $conn The database connection object.
     */
    private static function create_connection()
    {
        // loading env configurations
        $database_config_data = get_env("database");
        $servername = $database_config_data["servername"];
        $username = $database_config_data["username"];
        $password = $database_config_data["password"];
        $db = $database_config_data["db"];

        // Creating a new connection .
        $conn = new mysqli($servername, $username, $password, $db);

        // Checking connected or not.
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Returning Connection object.
        return $conn;
    }

    /**
     * Function to get database connection.
     *
     * If there is already a connection is maded the it reuse it ,otherwise it return new connection.
     *
     * 
     * @return object $conn The database connection object.
     */
    public static function get_connection()
    {
        // Checking the connection is exist or not.
        if (db::$connection == null) {
            $conn = db::create_connection();
            db::$connection = $conn;
            return $conn;
        } else {
            return db::$connection;
        }
    }

    /**
     * Function to get all data for the given user.
     * 
     * The function take one argument called $user ,and it will fetch user data according to it.
     * If the user is exist it will return userdata as an object ,otherwise it return null.
     * 
     * @param string $user It can be a username or email to retrive user data from database.
     * @return mixed $result It may be user data null or object.
     */
    public static function select_user($user)
    {
        // Getting connection
        $conn = db::get_connection();
        $sql = "SELECT * FROM `users` WHERE `email`='$user' OR `username`='$user' LIMIT 1";
        $result = $conn->query($sql);

        // Checking select query result.
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * Function to insert data for the give user.
     * 
     * The function takes five arguments: $name, $username, $email, $phone, and $password. It inserts them into the database.
     * 
     * @param string $name Name of the user.
     * @param string $username username of the user.
     * @param string $email email of the user.
     * @param string $phone phone number of the user.
     * @param string $password password of the user.
     * @return bool True if insertion was successful, false otherwise.
     */
    public static function insert_user($name, $username, $email, $phone, $password)
    {
        // Getting connection
        $conn = db::get_connection();
        $sql = "INSERT INTO `users` (`name`, `username`, `email`, `phone`, `password`, `is_verified`)
VALUES ('$name', '$username', '$email', '$phone', '$password', '0');";
        $result = $conn->query($sql);

        // Checking insert query result.
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
}
