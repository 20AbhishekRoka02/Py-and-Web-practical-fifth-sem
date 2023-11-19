<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail</title>
</head>
<body>
<?php

// require 'vendor/autoload.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


 
?>
    <section>
        
        <form action="index.php" method="POST">
            <div>
                <input type="email" name="to" placeholder="Your Recipient email">
            </div>
            <div>
                <input type="text" name="subject" placeholder="Subject">
            </div>
            <div>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Write your message here..."></textarea>
            </div>
            
            <div style="margin-top: 10px;">
                <input type="submit">
            </div>
        </form>

        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sending simple mail using fakeSMTP - a Testing tool
            $to=$_POST['to'];
            $subject = $_POST['subject'];
            $msg = $_POST['message'];
            ini_set("SMTP", "localhost");
            ini_set("smtp_port", "465");
            mail($to,$subject,$msg,"From: rockst463@gmail.com");

            // // Sending actual mail using Real SMTP by PHP Mailer
            




            // // Create a new PHPMailer instance
            // $mail = new PHPMailer();

            // // Enable debugging (remove in production)
            // $mail->SMTPDebug = 2;

            // // Set the mailer to use SMTP
            // $mail->isSMTP();

            // // Specify the SMTP server
            // $mail->Host = '127.0.0.1';

            // // Enable SMTP authentication
            // $mail->SMTPAuth = true;

            // // SMTP username and password
            // $mail->Username = 'seneder mail';
            // $mail->Password = 'password';

            // // Enable TLS encryption; use `PHPMailer::ENCRYPTION_SMTPS` for SMTPS
            // $mail->SMTPSecure = 'openssl';

            // // Specify the SMTP port
            // $mail->Port = 587;

            // // Set the sender and recipient
            // $mail->setFrom('sendermail', 'sender name');
            // $mail->addAddress($to, 'Receiver');

            // // Set email subject and body
            // $mail->Subject = $subject;
            // $mail->Body = $msg;

            // // Send the email
            // if (!$mail->send()) {
            //     echo 'Mailer Error: ' . $mail->ErrorInfo;
            // } else {
            //     echo 'Message sent!';
            // }


            
        }
        ?>
    </section>
    
</body>
</html>