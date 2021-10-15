<?php
 
/*require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

    $mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "";                 // SMTP username
    $mail->Password = "";                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom("", $_POST['name']);
    $mail->addAddress("");     // Add a recipient

    $mail->addReplyTo($_POST['email']);
    // print_r($_FILES['file']); exit;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
    $mail->Subject = $_POST['subject'];
    $mail->AltBody = $_POST['message'];
    echo 'OK';
    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
    echo 'OK';
}
    
*/
// function telegram_send($message) {
//     $curl = curl_init();
//     $api_key  = '1352352183:AAEysO2W17zmp-yZtY1T-pjumYSinShG1Go';
//     $chat_id  = '811389319';
//     $format   = 'HTML';
//     curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
//     $result = curl_exec($curl);
//     curl_close($curl);
//     return true;
// }

// $message = "+++++++++ New Message ++++++++";
// $message .= "SUBJECT: ".$_POST['subject'];
// $message .= "MESSAGE: ".$_POST['message'];

// telegram_send(urlencode($message));

// echo "OK";
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
require 'class.phpmailer.php';
require 'class.smtp.php';
require 'Exception.php';
require 'PHPMailerAutoload.php';

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['subject'];
    $message = $_POST['message'];
    $mail = new PHPMailer(true);
    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username   = 'boucharebabdelmoula12@gmail.com';                     //SMTP username
    $mail->Password = 'abdou9214678';
    //$mail->Password   = 'narutohkg12'; 
    $mail->Port = 587;  
    $mail->SMTPSecure = 'tls';  
    $mail->setFrom($email);
    //Email Settings
    $mail->isHTML(true);
    $mail->addAddress('boucharebabdelmoula12@gmail.com', 'Bouchareb Abdelmoula'); 
//$mail->phone = $phone;
//$mail->body = 'This is the HTML message body <b>in bold!</b>';
    $mail->Subject = 'here is the mail ';
    $mail->Body    = 'Name : '.$name.'<br> Phone : '.$phone.'<br> Email : '.$email.'<br> Message : '.$message; 
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo "sent";
    // if ($mail->send()) {
    // $a =1;   
    // header("location:index.php");
    // } else {
    //     $a=2;
    //     sleep(5);
    //     header("location:index.php");
    // }
    // if($a=1){
    //     sleep(5);
    //     echo '<script>alert("Votre Mail est Bien envoyer! Merci.")</script>';
    // }elseif($a=2){
        
    //     echo '<script>alert("Une erreur c\est produit lors l\'envoi de votre Mail Esseyer Plus tard! Merci. ")</script>';
    // }
    
}
    
?>
