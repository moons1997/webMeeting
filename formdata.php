<?php
// print_r($_POST);die;
require("src/PHPMailer.php");
require("src/SMTP.php");
if((isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        
        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'myotpravitel@gmail.com';                 // SMTP username
        $mail->Password = 'myotpravitel2018';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('myotpravitel@gmail.com', 'Форма');
        $mail->AddAddress('xjoha@mail.ru', 'Jkjk');  
        $mail->AddAddress('bvcs21@yandex.ru', 'Алексей');
        $mail->AddAddress('bkxxl@bk.ru', 'Алексей');
           // Add a recipient
        
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        

             $mail->Subject = 'Форма - Опрос';
             $mail->Body    = '<h3> Система налогообложения : ' . $_POST['system'] . '<h3>' .
                              '<h3> Имущественная ответственность : ' . $_POST['responsibility'] . '<h3>' .
                              '<h3> Количество операций в месяц : ' . $_POST['operation-count'] . '<h3>' .
                              '<h3> Ведение банковского счета : ' . $_POST['calc-bank'] . '<h3>' .
                              '<h3> Email : ' . $email . '<h3>' .
                              '<h3> Телефон : ' . $phone . '<h3>' . 
                              '<h3> Имя : ' . $name . '<h3>';
        
       

        $mail->send();
        
        // return 'success';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
} else if((isset($_POST['phone'])&&$_POST['phone']!="") && $_POST['form-type'] == 'callback'){

    $phone = $_POST['phone'];

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        
        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'myotpravitel@gmail.com';                 // SMTP username
        $mail->Password = 'myotpravitel2018';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('myotpravitel@gmail.com', 'Форма');
        $mail->AddAddress('xjoha@mail.ru', 'Jkjk');  
        $mail->AddAddress('bvcs21@yandex.ru', 'Алексей');
        $mail->AddAddress('bkxxl@bk.ru', 'Алексей');
           // Add a recipient
        

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        

             $mail->Subject = 'Форма - Обратный звонок';
             $mail->Body    = '<h3> Телефон : ' . $phone . '<h3>';
        
       

        $mail->send();
        
        // return 'success';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}else if((isset($_POST['phone'])&&$_POST['phone']!="") && $_POST['form-type'] == 'modal-callback'){

    $phone = $_POST['phone'];

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        
        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'myotpravitel@gmail.com';                 // SMTP username
        $mail->Password = 'myotpravitel2018';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('myotpravitel@gmail.com', 'Форма');
        $mail->AddAddress('xjoha@mail.ru', 'Jkjk');  
        $mail->AddAddress('bvcs21@yandex.ru', 'Алексей');
        $mail->AddAddress('bkxxl@bk.ru', 'Алексей');
        
           // Add a recipient
        
        // $mail->AddAddress('xjoha@mail.ru'); 
        // $mail->AddAddress('aromaclub@protonmail.com'); 
        //  $mail->AddAddress('maltsev.stas21@gmail.com'); 
         // $mail->AddAddress('oclock.24@my.com '); 
      
        
        
        // $mail->addReplyTo('xjoha@mail.ru', 'Information');
        // $mail->addCC('xjoha@mail.ru');
        // $mail->addBCC('xjoha@mail.ru');

        //Attachments
        // $mail->addAttachment('pricelist.zip');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        

             $mail->Subject = 'Форма - Обратный звонок (модальное окно)';
             $mail->Body    = '<h3> Телефон : ' . $phone . '<h3>';
        
       

        $mail->send();
        
        // return 'success';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

