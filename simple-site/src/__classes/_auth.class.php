<?php

class auth
{
    public static $user_data = [];

    /**
     * Authenticate a user based on the provided password.
     *
     * This function checks if the query result contains a user and verifies the password.
     * If authentication is successful, it returns the username. Otherwise, it returns false.
     *
     * @param object $result The database query result containing user data.
     * @param string $password The password entered by the user.
     * @return mixed The username if authentication is successful, otherwise false.
     */
    public static function login($result, $password)
    {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                auth::$user_data = $row;
            }
            $user_pass = auth::$user_data["password"];
            if ($password == $user_pass) {
                return auth::$user_data['username'];
            }
        } else {
            return false;
        }
    }
    /**
     * Register a new user in the database.
     *
     * Calls the `insert_user()` function from the `db` class to store user details.
     * Returns true if successful, otherwise false.
     *
     * @param string $name The full name of the user.
     * @param string $username The chosen username.
     * @param string $email The user's email address.
     * @param string $phone The user's phone number.
     * @param string $password The user's password.
     * @return bool True if registration is successful, otherwise false.
     */
    public static function signup($name, $username, $email, $phone, $password)
    {
        $result = db::insert_user($name, $username, $email, $phone, $password);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Log out the currently authenticated user.
     *
     * Redirects to the login page.
     *
     * @return void
     */
    public static function logout()
    {
        unset($_SESSION['auth_token']);
        header("Location: login.php");
        exit();
    }

}
