
<?php

include_once '../src/__classes/_db.class.php';
include_once '../src/__classes/_auth.class.php';

session_start();

function loadcontent($template_name)
{
    include_once $_SERVER['DOCUMENT_ROOT'] . "/__templates/$template_name.php";
}
