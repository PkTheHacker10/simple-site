<?php

use LDAP\Result;

include_once '../libs/__loader.php';
if (isset($_POST["email"]) and isset($_POST["pass"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $database_connection = db::get_connection();
    $result = db::select_user($email);
    if ($result) {
        print("User Found");
    } else {
        print("User Not Found");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-white dark:bg-gray-800">
        <div class="bg-white shadow-lg rounded-lg p-8 w-96">
            <h2 class="text-2xl font-bold text-center ">Simple-Site Login</h2>
            <form class="mt-6" action="login.php" method="post">
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" name="email" value="" required>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" name="pass" value="" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 mt-6 rounded-lg hover:bg-blue-600">Login</button>
            </form>
            <p class="mt-4 text-center text-gray-600">Don't have an account? <a href="#" class="text-blue-500">Sign up</a></p>
        </div>
    </div>

</body>

</html>