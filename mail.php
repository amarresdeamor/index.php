<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail= new PHPMailer();

$mail->Host='smtp.gmail.com';

$mail->SMTPAuth='true';

$mail->Username='diamantepro@gmail.com';     // valid mail id

$mail->Password='diamantepro9991';    // valid mail pass 

$mail->SMTPSecure='tls';

$mail->Port=587;


$mail->SetFrom('Developer@cserockers.ga','Developer');
$mail->addAddress('add to address');   // add To address
$mail->addReplyTo('Noreply@cserockers.ga','Info');
$mail->isHTML(true);
$mail->addAttachment('1.jpeg','new.jpeg');
$mail->Subject='U-tube';
$mail->Body='Sample For U-tube Viewers<br> <h1>hello</h1> ';


if($mail->send())
{
	echo'Mail Sent';
}
else
{
	echo "Mail sending failed";
}
?>
