<?php
// Je me connecte à la base de données
session_start ();// on utilise cette variable pour securiser l'acces a une page qui demande une connection

require 'Evenement_Classe.php';
require 'Club.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Load Composer's autoloader
require './vendor/autoload.php';

$club = new Club("",0,"","","",0,0,"","","","");
$event=new Evenement("","","",0,0,"","","","",0,"",0,0);

if($_SESSION['login'] == "BDE"){
    if(isset($_POST['valider_club']) and $_POST['v']=="Valider"){
        $n = $club->ValidClubBde($_POST['valider_club']);
        if ($n==1) {
            header('location: bde.php');
            $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress('sabine.rensy@eilco-ulco.fr');               // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Club is here';
    $mail->Body    = utf8_decode("Bonjour Madame Sabine Rensy,<br><br>
    LE BDE vient de valider la demande de création du club ".$_POST['validerr_club']."

     .<br><br> Veuillez consulter votre espace personnel pour valider ou refuser la demande.<br><br>Cordialement<br><br>Eilco's Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
    
        }
        
    }
    if(isset($_POST['refuser_club'])and $_POST['envoyer_club']=="Envoyer"){
        $club->RefuseClubBde($_POST['refuser_club']);
        header('location: bde.php');
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress($_POST['Email_club']);                  // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Traitement de votre demande';
    $mail->Body    = utf8_decode("Bonjour ,<br><br>
    LE BDE vient de refuser la demande de création  de votre club ".$_POST['validerr_club']." en donnat la raison ".$_POST['cause_club']."<br><br>Cordialement<br><br>Eilco Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }
    if(isset($_POST['valider_event']) and $_POST['v']=="Valider"){
        $event->ValidEventBde($_POST['valider_event']);
        header('location: bde.php');
        

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress('sabine.rensy@eilco-ulco.fr');                 // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = utf8_decode("Validation d'un évènement");
    $mail->Body    = utf8_decode("Bonjour Madame Sabine Rensy,<br><br>
    LE BDE vient de valider la demande d'organisation de l'évènement ".$_POST['validerr_event']."

    .<br><br>Veuillez consulter votre espace personnel pour valider ou refuser la demande.<br><br>Cordialement<br><br>Eilco Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    if(isset($_POST['refuser_event'])and $_POST['envoyer_event']=="Envoyer"){
        $event->RefuseEventBde($_POST['refuser_event']);
        header('location: bde.php');
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress($_POST['Email_club']);                  // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = 'Traitement de votre demande';
    $mail->Body    = utf8_decode("Bonjour ".$_POST['validerr_club'].",<br><br>
    LE BDE vient de refuser la demande d'organisation du  votre évènement ".$_POST['validerr_event']." en donnant la raison ".$_POST['cause_event']."<br><br>Cordialement<br><br>Eilco Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    if(isset($_POST['supprimer_event'])){
        $event->deleteEventBde($_POST['supprimer_event']);
        header('location: bde.php');
    }

   if(isset($_POST['supprimer_club'])){
        $club->deleteClubBde($_POST['supprimer_club']);
        header('location: bde.php');
    }
}


if($_SESSION['login'] == "SABINE Rensy"){
    if(isset($_POST['valider_club']) and $_POST['v']=="Valider"){
        $n = $club->ValidClubResponsable($_POST['valider_club']);
        if ($n==1) {
            header('location: responsable.php');
            $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress($_POST['Email_club']);                 // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = 'Validation de Votre Club ';
    $mail->Body    = utf8_decode("Bonjour ".$_POST['validerr_club'].",<br><br>
    Madame Sabine Rensy vient de valider votre demande de création du club ".$_POST['validerr_club']."

     .<br><br> Vous pouvez maintenant consulter votre espace personnel pour organiser des évènements.<br><br>Cordialement<br><br>Eilco's Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
        }
        
    }
    if(isset($_POST['refuser_club'])and $_POST['envoyer_club']=="Envoyer"){
        $club->RefuseClubResponsable($_POST['refuser_club']);
        header('location: responsable.php');
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress($_POST['Email_club']);                 // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Traitement de votre demande';
    $mail->Body    = utf8_decode("Bonjour ".$_POST['validerr_club'].",<br><br>
    Madame Sabine Rensy vient de refuser la demande de création  de votre club ".$_POST['validerr_club']." en donnant la raison  ".$_POST['cause_club']."<br><br>Cordialement<br><br>Eilco Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
if(isset($_POST['valider_event']) and $_POST['v']=="Valider"){
        $event->ValiderEventResponsable($_POST['valider_event']);
        header('location: responsable.php');
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
   $mail->addAddress($_POST['Email_club']);                // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = utf8_decode("Validation d'un évènement");
    $mail->Body    = utf8_decode("Bonjour ".$_POST['validerr_club'].",<br><br>
    Madame Sabine Rensy vient de valider la demande d'organisation de l'évènement ".$_POST['validerr_event']."

    .<br><br>Veuillez consulter votre espace personnel pour vérifier le traitement de votre évènement.<br><br>Cordialement<br><br>Eilco Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    if(isset($_POST['refuser_event'])and $_POST['envoyer_event']=="Envoyer"){
        $event->RefuseEventResponsable($_POST['refuser_event']);
        header('location: responsable.php');
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eilcosclub.plateforme@gmail.com';                     // SMTP username
    $mail->Password   = 'eilco2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eilcosclub.plateforme@gmail.com', 'Eilco Club');
     // Add a recipient
    $mail->addAddress($_POST['Email_club']);               // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Traitement de votre demande';
    $mail->Body    = utf8_decode("Bonjour ".$_POST['validerr_club'].",<br><br>
    Madame Sabine Rensy vient de refuser la demande d'organisation du  votre évènement ".$_POST['validerr_event']." en donnant la raison  ".$_POST['cause_event']."<br><br>Cordialement<br><br>Eilco Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    if(isset($_POST['supprimer_event'])){
        $event->deleteEventBde($_POST['supprimer_event']);
        header('location: responsable.php');
    }
    if(isset($_POST['supprimer_club'])){
        $club->deleteClubBde($_POST['supprimer_club']);
        header('location: responsable.php');
    }

}

?>