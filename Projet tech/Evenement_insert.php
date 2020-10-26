<?php
// Je me connecte à la base de données
session_start ();// on utilise cette variable pour securiser l'acces a une page qui demande une connectoin
require 'Database_connexion.php';
require 'Evenement_Classe.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Load Composer's autoloader
require './vendor/autoload.php';
$id = $_SESSION['id'];;

if(isset($_POST['Organiser'])){ 
        if ( !empty($_POST['nom_eve'])  ) { 

            $evenement = new Evenement($_POST['nom_eve'],$_POST['campus'],$_POST['annee_eve'],$_POST['h_d'],$_POST['h_f'],$_POST['type_eve'],$_POST['lieu'],$_POST['date_eve'],$_POST['obj'],$id,$_POST['resp_eve'],$_POST['aide'],$_POST['montant_eve']);
            $evenement->AddEvent();

            $fichier = fopen("testdesvarevent.txt","a");
            $donnees= $_POST['nom_eve']."/".$_POST['campus']."/".$_POST['annee_eve']."/".$_POST['h_d']."/".$_POST['h_f']."/".$_POST['type_eve']."/".$_POST['lieu']."/".$_POST['date_eve']."/".$_POST['obj']."/".$id."/".$_POST['resp_eve']."/".$_POST['aide']."/".$_POST['montant_eve']."\n";
            fwrite($fichier,$donnees);
            fclose($fichier);


            header('Location: creation_succes.php');
            $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // ObjeSet the SMTP server to send through
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
    $mail->Subject = 'New Event is here';
    $mail->Body    = utf8_decode("Bonjour Le BDE,<br><br>
    Un Club vient de déposer la demande d'organiser un événement 

     .<br><br> Veuillez consulter votre espace personnel pour valider ou refuser la demande.<br><br>Cordialement<br><br>Eilco's Club");
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
header('Location: creation_succes.php');
        }

        else {

            echo "<script>alert('La formulaire n'est pas bien remplie ');</script>";
            header('refresh: 0.3; url = evenement_form.php');
        }
		
	}
	
	


?>