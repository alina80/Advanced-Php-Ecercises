<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Sender</title>
</head>
<body>
<form method="POST">
    <label>
        Sender<br>
        <input type="text" name="destination" required="required">
    </label>
    <br>
    <label>
        Receiver<br>
        <input type="email" name="receiver" required="required">
    </label>
    <br>
    <label>
        Email<br>
        <textarea name="content" cols="80" rows="10" required="required"></textarea>
    </label>
    <br>
    <input type="submit" value="Send">
</form>
</body>
</html>
