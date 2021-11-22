<?php
// Je me connecte à la base de données
session_start ();// on utilise cette variable pour securiser l'acces a une page qui demande une connectoin
require'Database_connexion.php';
require 'Soutenance.php';


if($_SESSION['login'] == "DELVART Rensy"){
	if(isset($_POST['Ajouter']) and $_POST['Ajouter']=="Ajouter"){
        if ( !empty($_POST['int_sout'])  and  !empty($_POST['date_sout']) and  !empty($_POST['club_id'])and  !empty($_POST['heure_sout'])) {
            $soutenance2 = new Soutenance($_POST['club_id'],$_POST['int_sout'],$_POST['date_sout'],$_POST['heure_sout']);
            $soutenance2->AddSoutenance();
            header('Location: responsable_soutenance.php');

        }

        else {

            echo "<script>alert('La formulaire n'est pas bien remplie ');</script>";
            header('refresh: 0.3; url = responsable_soutenance.php');
        }
		
	}
	
	if(isset($_POST['supprimer_soutenance'])and $_POST['supprimer_soutenance']=="Supprimer"){
        $soutenance1 = new Soutenance("",0,"",0);
		$soutenance1->deleteSoutenance($_POST['id_soutenance']);
		header('location: responsable_soutenance.php');
	}

}

?>