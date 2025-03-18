<?php
include_once '../libs/__loader.php';
if (isset($_POST["name"]) and isset($_POST["username"]) and isset($_POST["email"])  and isset($_POST["phone"]) and isset($_POST["password"]) and isset($_POST["rpassword"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $retype_password = $_POST["rpassword"];
    $signup_result = user::signup($name, $username, $email, $phone, $password);
    if ($signup_result) {
        print("Signup success");
        header("Location: login.php");
    } else {
        print("Signup Failed");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple-site | Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative bg-[url('img/background.jpg')] bg-fixed bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-black bg-opacity-45 backdrop-blur-md"></div>

    <div class="relative flex items-center justify-center min-h-screen">
        <div class="rounded-lg w-100  border-white/20 shadow-lg">
            <h2 class="text-2xl text-white font-bold text-center font-mono">Create an Account</h2>
            <form class="mt-4" action="signup.php" method="post">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-200">Name</label>
                        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name" name="name" value="" required>
                    </div>
                    <div>
                        <label class="block text-gray-200">Username</label>
                        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your username" name="username" value="" required>
                    </div>
                    <div>
                        <label class="block text-gray-200">Email</label>
                        <input type="email" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" name="email" value="" required>
                    </div>
                    <div>
                        <label class="block text-gray-200">Phone Number</label>
                        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your phone number" name="phone" value="" required>
                    </div>
                    <div>
                        <label class="block text-gray-200">Password</label>
                        <input type="password" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" name="password" value="" required>
                    </div>
                    <div>
                        <label class="block text-gray-200">Retype Password</label>
                        <input type="password" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Retype your password" name="rpassword" value="" required>
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 mt-6 rounded-lg hover:bg-blue-600">Sign Up</button>
            </form>
            <p class="mt-4 text-center text-gray-300">Already have an account? <a href="login.php" class="text-blue-400">Login</a></p>
        </div>
    </div>
</body>

</html>