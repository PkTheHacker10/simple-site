<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php

    include '../libs/__loader.php';

    ?>

</head>

<body class="bg-[url('img/bg.jpg')] bg-fixed bg-no-repeat bg-cover min-h-screen">
    <!-- Blur Overlay -->
    <div class="fixed inset-0 backdrop-blur-md z-0"></div>
    <?php
    loadcontent("nav");
    loadcontent("blog");
    ?>
</body>

</html>