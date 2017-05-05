<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 05.05.2017
 * Time: 8:00
 */
session_start();


if(isset($_POST["send"])){
    $from= htmlspecialchars($_POST["from"]);
    $to= htmlspecialchars($_POST["to"]);
    $subject= htmlspecialchars($_POST["subject"]);
    $message= htmlspecialchars($_POST["message"]);

    $_SESSION['from'] = $from;
    $_SESSION['to'] = $to;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    require_once 'error-handler.php';
    if (!$error) {
        mail($to, $subject, $message);

        echo "<div class='accept'>Mail was sent</div>
        <div class='sent-data'>Sent data: 
             <ul>
                <li>Your mail: $from</li>
                <li>Acceptor mail: $to</li>
                <li>Subject: $subject</li>
                <li>Message: $message</li>
            </ul>            
        </div>
        <a class='new-msg' href='feedback-form.php'>Send new message</a>
        ";
    }
}
