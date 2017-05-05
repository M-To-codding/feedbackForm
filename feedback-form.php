<?php

session_start();

require_once 'check-form.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="post">
    <label for="from">Sender email
        <input type="email" id="from" name="from"
               value="<?=$_SESSION['from']?>">
    </label>
    <span class="error"><?= $data_error ?></span>
    <label for="to">Acceptor email
        <input type="email" id="to" name="to"
               value="<?=$_SESSION['to']?>">
    </label>
    <span class="error"><?=$data_error?></span>
    <label for="subject"> Subject
        <input type="text" id="subject" name="subject"
               value="<?=$_SESSION['subject']?>">
    </label>
    <span class="error"><?=$data_error?></span>
    <label for="message" class="textarea-label">
        <div>Message</div>
        <textarea name="message" id="message" cols="21" rows="5">
               <?=$_SESSION['message']?></textarea>
        <span class="error textarea-err"><?=$data_error?></span>
    </label>

    <input type="submit" name="send" value="Send"/>
</form>

</body>
</html>