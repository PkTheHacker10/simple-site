<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple-site | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php

include_once '../libs/__loader.php';
if (isset($_POST["email"]) and isset($_POST["pass"])) {
    $user = $_POST["email"];
    $pass = $_POST["pass"];
    $database_connection = db::get_connection();
    $results = db::select_user($user);
    $login_result = auth::login($results, $pass);
    if ($login_result) {
        header("Location: home.php");
        $_SESSION['auth_token']="token1234";
    } else {
        print("Login not successfull");
    }
}
loadcontent("login");
