<?php
    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

    use PHPMailer\PHPMailer\SMTP;



    require 'phpmailer/Exception.php';

    require 'phpmailer/PHPMailer.php';

    require 'phpmailer/SMTP.php';

    
    $name = $_POST['firstname-entities'];
    $fullEntity = $_POST['entity'];
    $phone = $_POST['phone-entities'];
    $addressEntity = $_POST['address-entities'];
    $surnameHead = $_POST['surname-entities'];
    $emailEntity = $_POST['email-entities'];
    $messages = $_POST['messages-entities'];
    $file = $_FILES['file-entities'];
    
    $title = "Электронное обращение юридического лица";

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

    <b>Полное наименование юридического лица:</b> $fullEntity<br>
    
    <b>Телефон:</b> $phone<br>

    <b>Адрес юридического лица:</b> $addressEntity<br>

    <b>Фамилия, собственное имя, отчество (если таковое имеется) либо инициалы руководителя или лица, уполномоченного в установленном порядке подписывать обращения*:</b> $addressEntity<br>
    
    <b>E-mail:</b> $emailEntity<br>

    <b>Сообщение:</b> $messages<br/>

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