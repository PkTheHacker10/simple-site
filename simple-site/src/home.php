<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple-site | Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php

    include '../libs/__loader.php';

    ?>
</head>
<body class="bg-[url('img/bg.jpg')] bg-fixed bg-no-repeat bg-cover min-h-screen">
    <!-- Blur Overlay -->
    <div class="fixed inset-0 backdrop-blur-md z-0"></div>
    <div class="relative">
        <?php 
        loadcontent("nav");
        loadcontent("heading");
        loadcontent("blog");
        if (!empty($_SESSION['login_success'])): ?>
            <div id="alert" class="fixed bottom-7 px-4 pt-5 right-5 py-2 rounded-lg">
                <?php 
                loadcontent('login-s-alert'); 
                unset($_SESSION['login_success']);
                ?>

            </div>
        <?php endif; ?>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('alert').style.display='none';
        }, 3000);
    </script>
</body>
</html>


