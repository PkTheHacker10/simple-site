<?php

include_once '../libs/__loader.php';
if (isset($_POST["email"]) and isset($_POST["pass"])) {
    $user = $_POST["email"];
    $pass = $_POST["pass"];
    $database_connection = db::get_connection();
    $results = db::select_user($user);
    $login_result = auth::login($results, $pass);
    if ($login_result) {
        print("Login successfully");
    } else {
        print("Login not successfull");
    }
}
loadcontent("login");
