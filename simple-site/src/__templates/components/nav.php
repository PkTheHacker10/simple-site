<!-- Navbar -->
<div class="relative flex justify-center text-white ">
    <nav class="w-full max-w-screen-lg px-0 py-3">
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <h4 class="text-2xl font-bold uppercase">Simple-Site</h4>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border-0 md:flex-row md:space-x-8">
                    <li><a href="home.php" class="block py-2 px-3 hover:text-blue-500">Home</a></li>
                    <li><a href="#" class="block py-2 px-3 hover:text-blue-500">About</a></li>
                    <li><a href="blog.php" class="block py-2 px-3 hover:text-blue-500">Blogs</a></li>
                    <?php if ($_SESSION['auth_token']) { ?>
                        <li><a href="#"
                                class="block py-2 px-3 hover:text-blue-500 data-dropdown-toggle=dropdown">Account</a></li>
                    <?php } else { ?>
                        <li>
                            <a href="login.php">
                                <button
                                    class="bg-gradient-to-br from-cyan-300 to-blue-800 hover:bg-gradient-to-bl rounded-lg text-sm px-4 py-1.5 ml-5">
                                    Login / Signup
                                </button>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>