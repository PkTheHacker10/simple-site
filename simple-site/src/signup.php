<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative bg-[url('img/background.jpg')] bg-fixed bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-black bg-opacity-45 backdrop-blur-md"></div>

    <div class="relative flex items-center justify-center min-h-screen">
        <div class="p-8 rounded-lg w-96  border-white/20 shadow-lg">
            <h2 class="text-2xl text-white font-bold text-center font-mono">Create an Account</h2>
            <form class="mt-6" action="signup.php" method="post">
                <div>
                    <label class="block text-gray-200">Username</label>
                    <input type="text" name="username" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your username" required>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-200">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-200">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-200">Retype Password</label>
                    <input type="password" name="retype_password" class="w-full px-4 py-2 mt-2 border rounded-lg placeholder-gray-400 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Retype your password" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 mt-6 rounded-lg hover:bg-blue-600">Sign Up</button>
            </form>
            <p class="mt-4 text-center text-gray-300">Already have an account? <a href="login.php" class="text-blue-400">Login</a></p>
        </div>
    </div>
</body>

</html>