<?php
  require 'PHPMailerAutoload.php';
  function sendMail($html_data,$Subject,$mailId,$filename,$attachment){
    $mail = new PHPMailer;
    $message = 'Hello,';//$_POST['message'];
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP(); 
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp-relay.gmail.com';// Gmail
    //$mail->Host = 'smtp.zoho.com';// Zoho
    $mail->SMTPDebug = 2;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'username';                 // SMTP username
    $mail->Password = 'password';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '465';                                    // TCP port to connect to
    $mail->From = 'no-reply@gmail.com';
    $mail->FromName = 'Send Test Mail';
    $mail->addAddress($mailId);               // Name is optional
    if(!empty($attachment)){
        $mail->addStringAttachment($attachment, $filename.".csv", 'base64', 'application/octet-stream'); 
    }
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $Subject;
    //$mail->Body = $message;
    $mail->Body .= $html_data;
    $mail->AltBody = 'You are using basic web browser ';
    /*if(is_array($_FILES)) {
        $mail->AddAttachment($_FILES['attachment']['tmp_name'],$_FILES['attachment']['name']); 
    }*/
    if(!$mail->send()){
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        //header('Location: thankyou.html');
    }
  }
