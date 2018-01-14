<?php
requiere 'PHPMailer/PHPMailerAutoload.php';


$mail= new PHPMailer();

$mail->Host='smtp.gmail.com';

$mail->SMTPauth='true';

$mail->Username='micorreode@gmail.com';

$mail->Pasword='temp()la-contraseña-de-migmail@password';

$mail->SMTPSECURE='tls';

$mail->Port=elpuertodemigmail;


$mail->Setfrom('micorreo@gmail.com','Mi nombre: Developers);
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


