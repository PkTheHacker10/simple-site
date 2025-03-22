<?php
$loginMessage = "";
if (isset($_SESSION['login_success'])) {
    $loginMessage = $_SESSION['login_success'];
    unset($_SESSION['login_success']); // Remove message after displaying
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <?php if (!empty($loginMessage)): ?>
        <div id="alert" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg">
            🔔 <?php echo $loginMessage; ?>
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('alert').style.display = 'none';
            }, 3000);
        </script>
    <?php endif; ?>

</body>

</html>