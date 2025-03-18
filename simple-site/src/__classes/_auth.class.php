<?php

class user
{
    public static $user_data = [];
    public static function login($result, $password)
    {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                user::$user_data = $row;
            }
            $user_pass = user::$user_data["password"];
            if ($password == $user_pass) {
                return true;
            }
        } else {
            return false;
        }
    }
    public static function signup($name, $username, $email, $phone, $password)
    {
        $result = db::insert_user($name, $username, $email, $phone, $password);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
