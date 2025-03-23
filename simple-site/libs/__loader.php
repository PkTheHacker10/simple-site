<?php

include_once '../src/__classes/_db.class.php';
include_once '../src/__classes/_auth.class.php';

session_start();

/**
 * Function to load a template file.
 *
 * This function takes one argument, which is the template filename,
 * and loads its content if the file exists.
 *
 * @param string $template_name The name of the template file to load.
 * 
 */
function loadcontent($template_name)
{
    $template_location = $_SERVER['DOCUMENT_ROOT'] . "/__templates/";
    if (file_exists($template_location . $template_name . ".php")) {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/__templates/$template_name.php";
    } else {
        throw new ErrorException("Template File not found in " . $template_name);
    }

}

/**
 * Function to get env values.
 *
 * This function takes one argument, which is the key to the value ,
 * and return value if it's exists.
 *
 * @param string $template_name The name of the template file to load.
 * @param string $key The key for the env element.
 */
function get_env($key)
{
    $env_location = __DIR__ . "/../config/env.json";
    if (file_exists($env_location)) {
        $env_file_contents = file_get_contents($env_location);
        $json_data = json_decode($env_file_contents, true);
        return $json_data[$key];
    } else {
        die("config File not found in " . $env_location);
    }

}
