<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 05.05.2017
 * Time: 8:59
 */

$data_error="";
$error = false;
if (strlen($from)==0 || strlen($to)==0 ||
    strlen($subject)==0 ||  strlen($message)==0) {
    $error=true;
    $data_error = "Add a correct data!";
}