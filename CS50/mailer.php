<?php include("conection.php"); ?>
<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['bnt']))
{ 
    $size= $_POST['btn'];
    $binding= $_POST['case'];
    $interior= $_POST['black'];
    $paper = $_POST['paper'];
    $lamination= $_POST['matte'];
    $Design= $_POST['file'];
    $file=$_POST['uploadfile'];
    $submit=$_POST['submit'];

    $mail = new PHPMailer(exceptions: true);

try{


$mail->isSMTP();
$mail->SMTPAuth =true;

$mail->Host ="smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port=587;


$mail->Username = "borateroshan12@gmail.com";
$mail->Password = "dvvzdtpwqtuvyhrp";
$mail->setFrom(address: 'borateroshan12@gmail.com');
$mail->addAddress(address: $_POST["email"]);

$mail->isHTML(isHtml: true);
$mail->Subject='Book Published';
$mail->Body='<h1>Book Summary</h1>

    <h2> size:'.$size.'</h2>
    <h2> binding:'.$binding.'</h2>
    <h2>interior: '.$interior.'</h2>
    <h2>paper: '. $paper.' </h2>
    <h2>lamination:'.  $lamination.'</h2>
    <h2>design: '. $Design.'</h2>
    <h2>file: '. $file.'</h2>
    <h2> submit: '.$submit.'</h2>
';
if($mail->send())
{
  $_SESSION['status']="Thank you contact us - Team E-book publication";
    header(header: "Location:{$_SERVER["HTTP_REFERER"]}");
    exit(0);
}
else{
    $_SESSION['status']="Message colud not be sent. Mailer Error: {$mail->ErrorInfo}";
    header(header: "Location:{$_SERVER["HTTP_REFERER"]}");
    exit(0);
}
}catch (Exception $e){
    echo"Message colud nnot be sent. Mailer Error:{$mail->ErrorInfo}";
}
}
else{
    header(header: 'location: E-book2.php');
exit(0);
}


