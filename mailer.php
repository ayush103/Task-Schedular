<?php
error_reporting(E_ALL);
ini_set("display_errors", "ON");
//include_once 'database.php';

//$email = $_POST['email'];
require_once '/opt/lampp/htdocs/task/task/PHPMailer_5.2.4/class.phpmailer.php';
// require_once 'PHPMailer_5.2.4/class.phpmailer.php';
$mail = new PHPMailer(true);
$mailid = "itsssanexample@gmail.com";
$subject = "Thank u";
$text_message = "Hello";
$message = "Thank You for Contact with us.";
//$attachment_path = "C:/xampp/htdocs/fdp/dd/downloads/DataMissing.xls.xls";
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="itsssanexample@gmail.com";
$mail->Password ="Hacksript1.0";
$mail->SetFrom('itsssanexample@gmail.com','Ayush');
$mail->AddReplyTo('itsssanexample@gmail.com','Ayush');
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
//$mail->addAttachment("C:/xampp/htdocs/fdp/dd/downloads/DataMissing.xls.xls");
if($mail->Send())
{
echo "Thank you for register u got a notification through the mail you provide";
}
else echo "Mail error";

?>