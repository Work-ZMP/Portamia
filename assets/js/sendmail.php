<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail ->CharSet = 'UTF-8';
    $mail ->setLanguage('ru', 'phpmailer/language/');
    $mail ->isHTML(true);

    //от кого письмо
    $mail->setFrom('rus091993@mail.ru', 'РУслан');
    //кому отправить
    $mail->addAddress('rus091993@gmail.com');
    //тема письма
    $mail->Subject = 'Здравствуйте! Это Фасадная компания';


    //тело письма
    $body = '<h1>Это новое письмо</h1>';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Имя:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>E-mail:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['message']))){
        $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
    }

    $mail->Body = $body;

    //Отправляем
    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message'=> $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>    
