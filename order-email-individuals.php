<?php
    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

    use PHPMailer\PHPMailer\SMTP;



    require 'phpmailer/Exception.php';

    require 'phpmailer/PHPMailer.php';

    require 'phpmailer/SMTP.php';
   
    $name = $_POST['firstname-individuals'];
    $lastnameIndividuals = $_POST['lastname-individuals'];
    $phone = $_POST['phone-individuals'];
    $addressIndividuals = $_POST['address-individuals'];
    $emailIndividuals = $_POST['email-individuals'];
    $messagesIndividuals = $_POST['messages-individuals'];
    $file = $_FILES['file-individuals'];
    
    $title = "Электронное обращение физического лица";

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

    if (!empty($file['name'][0])) {
        for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
            $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
            $filename = $file['name'][$ct];
            if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
                $mail->addAttachment($uploadfile, $filename);
                $rfile[] = "Файл $filename прикреплён";
            } else {
                $rfile[] = "Не удалось прикрепить файл $filename";
            }
        }   
    }

    $mail->msgHTML("

    <h2>Детали обращения</h2>
    
    <b>Имя кому адресовано письмо:</b> $name<br>

    <b>Фамилия, собственное имя, отчество:</b> $lastnameIndividuals<br>
    
    <b>Телефон:</b> $phone<br>

    <b>Адрес места жительства:</b> $addressIndividuals<br>
    
    <b>E-mail:</b> $emailIndividuals<br>

    <b>Сообщение:</b> $messagesIndividuals<br/>

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