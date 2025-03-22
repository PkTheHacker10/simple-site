<?php
include_once '../libs/__loader.php';
if (isset($_POST["name"]) and isset($_POST["username"]) and isset($_POST["email"])  and isset($_POST["phone"]) and isset($_POST["password"]) and isset($_POST["rpassword"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $retype_password = $_POST["rpassword"];
    $signup_result = auth::signup($name, $username, $email, $phone, $password);
    if ($signup_result) {
        header("Location: login.php");
    } else {
        print("Signup Failed");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple-site | Signup</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<?php
include_once '../libs/__loader.php';
loadcontent("signup");
?>

</html>