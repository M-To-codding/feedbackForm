<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 05.05.2017
 * Time: 8:00
 */

if(isset($_POST["send"])){
    $from= htmlspecialchars($_POST["from"]);
    $to= htmlspecialchars($_POST["to"]);
    $subject= htmlspecialchars($_POST["subject"]) .
        htmlspecialchars($_POST["usrName"]);
    $message= htmlspecialchars($_POST["message"]);
    mail($to, $subject, $message);

    echo "<div class='accept'>Mail was sent</div>
<div>Sent data: </div>
    <ul>
    <li>Your mail: $from</li>
    <li>Acceptor mail: $to</li>
    <li>Subject: $subject</li>
    <li>Message: $message</li>
</ul>
<a href='feedback-form.html'><- Back</a>";
}

