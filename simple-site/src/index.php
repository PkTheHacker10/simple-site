<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple-Site</title>
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
        loadcontent("components/nav");
        loadcontent("components/heading");
        loadcontent("components/blog");
        ?>
    </div>


</body>

</html>