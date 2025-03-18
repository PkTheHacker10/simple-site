<?php
session_start();
include_once '__classes/_db.class.php';

$test = db::get_connection();
db::select_user("test@gmail.com");
