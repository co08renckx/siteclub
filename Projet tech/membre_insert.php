<?php

require 'Club.php';
require 'Membre.php';
require 'Appartenance.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Load Composer's autoloader
require './vendor/autoload.php';
session_start ();

$verification = 0;

  

if (!empty($_POST['submit'])) {

   
    
if (!empty($_POST['nom_prenom1'])   and  !empty($_POST['promotion1']) and  !empty($_POST['fonction1']) and  !empty($_POST['specialite1'])){
    
    $Membre = new Membre($_POST['nom_prenom1'],$_POST['promotion1'],$_POST['specialite1']);

   /* $fichier = fopen("testdesvar.txt","a");
    $donnees= $_SESSION['club_current']->getId()."/".$Membre->AddMembre()."/".$_POST['fonction1'] ;
    fwrite($fichier,$donnees);
    fclose($fichier);*/

    $Appartenance = new Appartenance($_SESSION['club_current']->getId(),$Membre->AddMembre(),$_POST['fonction1']);
    $verification = 1;

}

if (!empty($_POST['nom_prenom2'])  and  !empty($_POST['promotion2']) and  !empty($_POST['fonction2']) and  !empty($_POST['specialite2'])){


	$Membre = new Membre($_POST['nom_prenom2'],$_POST['promotion2'],$_POST['specialite2']);
	$Appartenance = new Appartenance($_SESSION['club_current']->getId(),$Membre->AddMembre(),$_POST['fonction2']);
    $verification = 1;
    
}
if (!empty($_POST['nom_prenom3'])  and  !empty($_POST['promotion3'])and  !empty($_POST['fonction3']) and  !empty($_POST['specialite3'])){


	$Membre = new Membre($_POST['nom_prenom3'],$_POST['promotion3'],$_POST['specialite3']);
	$Appartenance = new Appartenance($_SESSION['club_current']->getId(),$Membre->AddMembre(),$_POST['fonction3']);
	$verification = 1;
}
if (!empty($_POST['nom_prenom4'])  and    !empty($_POST['promotion4']) and  !empty($_POST['fonction4']) and  !empty($_POST['specialite4'])){


	$Membre = new Membre($_POST['nom_prenom4'],$_POST['promotion4'],$_POST['specialite4']);
	$Appartenance = new Appartenance($_SESSION['club_current']->getId(),$Membre->AddMembre(),$_POST['fonction4']);
	$verification = 1;
}		
if (!empty($_POST['nom_prenom5'])  and    !empty($_POST['promotion5']) and  !empty($_POST['fonction5']) and  !empty($_POST['specialite5'])){


	$Membre = new Membre($_POST['nom_prenom5'],$_POST['promotion5'],$_POST['specialite5']);
	$Appartenance = new Appartenance($_SESSION['club_current']->getId(),$Membre->AddMembre(),$_POST['fonction5']);
	$verification = 1;
}
if (!empty($_POST['nom_prenom6'])  and    !empty($_POST['promotion6']) and  !empty($_POST['fonction6']) and  !empty($_POST['specialite6'])){


	$Membre = new Membre($_POST['nom_prenom6'],$_POST['promotion6'],$_POST['specialite6']);
	$Appartenance = new Appartenance($_SESSION['club_current']->getId(),$Membre->AddMembre(),$_POST['fonction6']);
	$verification = 1;
}

if  ($verification) {
header('Location: creation_succes.php');

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
    $mail->addAddress('bde@eilco-ulco.fr');               // Name is optional
    

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Club is here';
    $mail->Body    = 'Bonjour BDE,<br><br>
    Le Club '.$_SESSION['club_current']->getNom().' vient de deposer sa demande de creation du club <br><br>

    Veuillez consulter votre espace personnel pour valider ou refuser la demande.<br><br>Cordialement<br><br>Eilco Club';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


	
}





}




?>