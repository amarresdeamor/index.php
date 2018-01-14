<?php
requiere 'PHPMailer/PHPMailerAutoload.php';

$mail= new PHPMailer();

$mail->Host='smtp.gmail.com';

$mail->SMTPauth='true';

$mail->Username='diamantepro@gmail.com';

$mail->Pasword='temp(diamantepro9991)';

$mail->SMTPSECURE='tls';

$mail->Port=587;


$mail->Setfrom('diamantepro@gmail.com','Hola Pros xD: Developers);
$mail->addAddress('poner-otro-correo-mas-xd@gmail.com')
$mail->addReplyto('otrocorreomio@gmail.com')','Info');

$mail->Subject='Nombre que aparece en el gmail';
$mail->Body='subtitulo del gmail'

if($mail->send())
{
echo'Mail Sent';
}
else
{
echo "Mail sending failed";


