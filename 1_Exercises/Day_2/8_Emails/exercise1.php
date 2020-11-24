<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './vendor/autoload.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;

        $mail = new PHPMailer;
        $mail->setFrom('a@host.com', 'Mailer');
        $mail->addAddress($email, $name);
        $mail->addReplyTo($email, $name);
        $mail->addAttachment('/path/file.zip');
        $mail->isHTML(true);
        $mail->Subject = 'Here is the subject';
        $mail->Body='<h2>Response</h2><b>' . $message . '</b>';
        $mail->AltBody = 'Plain text,not HTML';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mail Error: '.$mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }

    }

?>
<html lang="en">
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Contact form</h3>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="./exercise1.php" method="post">
                    <div class="form-group">
                        <label for="name">Name and Surname</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="message">Example textarea</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Send</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    </body>
</html>
