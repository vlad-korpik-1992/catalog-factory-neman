<?php
    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

    use PHPMailer\PHPMailer\SMTP;



    require 'phpmailer/Exception.php';

    require 'phpmailer/PHPMailer.php';

    require 'phpmailer/SMTP.php';
   
    $name = $_POST['firstname'];
    $phone = $_POST['phone'];
    $sku = $_POST['productsku'];
    $messages = $_POST['messages'];
    
    $title = "Запрос на наличие товара";

    $mail = new PHPMailer();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

    $mail->isSMTP(); 

    $mail->Host = 'smtp.yandex.ru';

    $mail->SMTPAuth = true;

    //$mail->SMTPDebug = 2;

    $mail->Username = 'pinroll@yandex.ru';

    $mail->Password = 'gxoexxdnzxwkdmwk';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    $mail->Port = 465;

    $mail->CharSet = 'UTF-8';

    $mail->Subject = $title;

    $mail->setFrom('pinroll@yandex.ru', 'Фабрика "Неман"');

    $mail->msgHTML("

    <h2>Детали обращения</h2>
    
    <b>Артикул товара:</b> $sku<br>

    <b>Имя:</b> $name<br>
    
    <b>Телефон:</b> $phone<br>

    <b>Город:</b> $messages<br/>

    ");

    $mail->addAddress('v.korpik2010@yandex.com');

    if(!$mail->send()) {

        echo 'Сообщение не может быть отправлено.';

        echo 'Ошибка: ' . $mail->ErrorInfo;

        exit;

    }

    else{

        echo 'Сообщение отправлено.';

    }
?>