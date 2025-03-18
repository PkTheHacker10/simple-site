<?php
session_start();
include_once '__classes/_db.class.php';

$test = db::get_connection();
$test1 = db::get_connection();
