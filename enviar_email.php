<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if(!empty($_POST['input_name']) && !empty($_POST['input_email']) && !empty($_POST['input_tel']) && !empty($_POST['input_text'])){
    try {   
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'davizinetec@gmail.com';
        $mail->Password   = 'wkgz zwmz jmxb gmun';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
    
        $mail->setFrom('davizinetec@gmail.com', 'Davi');
        $mail->addAddress('dadi.augusto69@gmail.com');
    
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Bom dia!, ' . $_POST['input_name'];
        $mail->Body    = '
            <h2>Bom dia!</h2>
            <p>Esperamos que o seu dia comece com muita energia e boas vibrações!</p>
            <p>Que hoje você tenha <b>alegria, foco e sucesso</b> em tudo o que fizer.</p>
            <br>
            <p>Atenciosamente,<br>
            <b>Equipe [Seu Nome ou Empresa]</b></p>
        ';
        $mail->AltBody = 'Bom dia! Esperamos que o seu dia comece com muita energia e boas vibrações. Que hoje você tenha alegria, foco e sucesso em tudo o que fizer. - Equipe [Seu Nome ou Empresa]';
    
    
        $mail->send();
        tratarsaida(true, 'Mensagem enviada com sucesso!');
    
    } catch (Exception $e) {
        tratarsaida(false, $mail->ErrorInfo);
        echo "A mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    tratarsaida(false, "Preencha todos os campos!");
}



function tratarsaida(bool $sucesso,string $texto) : void {
    if ($sucesso === true){
        header("Location: contato.php?send={$texto}");
    }else{
        header("Location: contato.php?send={$texto}&error={1}");
    }
}
