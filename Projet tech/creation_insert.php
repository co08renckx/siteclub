<?php
session_start ();

require 'Club.php';

if (!empty($_POST['submit'])) {
	if ( !empty($_POST['nom_club'])  and  !empty($_POST['annee']) and  !empty($_POST['date'])and  !empty($_POST['type'])and  !empty($_POST['promotion'])and  !empty($_POST['specialite']) and  !empty($_POST['chef']) and  !empty($_POST['nom_parrain']) and !empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['obj']) ) {
$_SESSION['club_current'] = new Club($_POST['nom_club'],$_POST['type'],$_POST['annee'],$_POST['date'],$_POST['chef'],$_POST['promotion'],$_POST['specialite'],$_POST['obj'],$_POST['nom_parrain'],$_POST['login'],$_POST['password']);
$_SESSION['club_current']->Setid($_SESSION['club_current']->Addclub());

header('Location: creation_membre.php');

}

else {

	echo "<script>alert('La formulaire n'est pas bien remplie ');</script>";
	header('refresh: 0.3; url = creation.php');
}

}

?>