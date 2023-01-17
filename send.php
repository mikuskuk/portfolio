<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['questions'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['date']) || empty($_POST['questions'])) {
        echo 'All fields required';
    }
    else {
        $formdata = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'date' => $_POST['date'],
            'questions' => $_POST['questions']
        );
    
    $filetxt = 'formdata.txt';
    
    $arr_data = array();

    if(file_exists($filetxt)) {
        $jsondata = file_get_contents($filetxt);

        $arr_data = json_decode($jsondata, true);
    }

    $arr_data[] = $formdata;

    $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
    
    if(file_put_contents('formdata.txt', $jsondata));
    }
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->Username = '@gmail.com';
    $mail->Password = '';
    
    $mail->setFrom('mikuskukainis@gmail.com');
    $mail->addReplyTo($_POST["email"]);

    $mail->addAddress($_POST["email"]);

    $mail->Subject = $_POST["name"];
    $mail->AltBody = 'This is a plain-text message body';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div class="book-thanks">
        <h1>Thank you!</h1>
        <p>I'll contact you back as quickly as possible</p>
        <a href="contacts.php" class="button">Back to page</a>
    </div>

</body>
</html>
