<body class="bg-[url(/img/bg.jpg)] bg-no-repeat bg-cover text-white ">
    <div class="fixed inset-0 backdrop-blur-md z-0"></div>
    <div class="relative flex items-center justify-center min-h-screen ">
        <div class="rounded-lg p-8 w-96">
            <h2 class="text-2xl text-white font-bold text-center font-mono">SIMPLE-SITE <br>LOGIN</h2>
            <form class="mt-6" action="login.php" method="post">
                <div>
                    <label class="block text-gray-400">Email</label>
                    <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email or Username" name="email" value="" required>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-400">Password</label>
                    <input type="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" name="pass" value="" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 mt-6 rounded-lg hover:bg-blue-600">Login</button>
            </form>
            <p class="mt-4 text-center text-gray-500">Don't have an account? <a href="signup.php" class="text-blue-500">Sign up</a></p>
        </div>
    </div>

</body>