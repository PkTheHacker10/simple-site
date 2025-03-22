<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple-site | Login</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <?php 
            include_once '../libs/__loader.php';
        ?>
    </head>
<?php

if (isset($_POST["email"]) and isset($_POST["pass"])) {
    $user = $_POST["email"];
    $pass = $_POST["pass"];
    $database_connection = db::get_connection();
    $results = db::select_user($user);
    $login_result = auth::login($results, $pass);
    if ($login_result) {
        $_SESSION['auth_token']="token1234";
        $_SESSION['login_status']="Login successfully";
        header("Location: home.php");
    } else {
        print("Login not successfull");
    }
}
if(isset($_SESSION['signup_status'])){
    ?>
    <div id="signup-alert" class="fixed bottom-7 right-5 px-4 pt-5 py-2 rounded-lg z-50">
    <?php 
        loadcontent('signup-s-alert'); 
        unset($_SESSION['signup_status']);
    ?>

</div>
<?php
}

loadcontent("login");

?>
<script>
    setTimeout(() => {
            document.getElementById('signup-alert').style.display='none';
        }, 3000);
</script>

