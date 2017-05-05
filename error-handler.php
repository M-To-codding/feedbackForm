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
if (!$error) {
    $subject = "=?utf-8?B?".base64_encode($subject);
    mail($to, $subject, $message);

    echo "<div class='accept'>Mail was sent</div>
<div>Sent data: </div>
    <ul>
    <li>Your mail: $from</li>
    <li>Acceptor mail: $to</li>
    <li>Subject: $subject</li>
    <li>Message: $message</li>
</ul>
<a href='feedback-form.php'>Send new message</a>";
}