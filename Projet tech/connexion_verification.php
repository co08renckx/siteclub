<?php
// Je me connecte à la base de données
session_start ();
$_SESSION['login_ok'] = false; // on utilise cette variable pour securiser l'acces a une page qui demande une connectoin

require 'Database_connexion.php';
$bdd=Database_Connexion();
if (isset($_POST['submit']) and isset($_POST['login']) and isset($_POST['password'])) {
if (!empty($_POST['password']) and !empty($_POST['login'])) {


$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];

$req = $bdd->prepare('SELECT * FROM gestionnaire WHERE  Email = :login AND password = :pass')or die(print_r($bdd->errorInfo())); // Je compte le nombre d'entrée ayant pour mot de passe et login ceux rentrés
$req->bindValue('login', $_SESSION['login'], PDO::PARAM_STR);
$req->bindValue('pass', $_SESSION['password'], PDO::PARAM_STR);
$req->execute();
$donnees = $req->fetch();
$rows = $req->rowCount();
$req->closeCursor();

$req1 = $bdd->prepare('SELECT * FROM club WHERE  Email = :login and mdp = :pass and approuve_responsable = 	1')or die(print_r($bdd->errorInfo()));
$req1->bindValue('login', $_SESSION['login'], PDO::PARAM_STR);
$req1->bindValue('pass', $_SESSION['password'], PDO::PARAM_STR);
$req1->execute();
$donnees1 = $req1->fetch();
$rows1 = $req1->rowCount();
$req1->closeCursor();

if($rows1 == 1) { // si le nombre de ligne est 1 email trouvé !
	$_SESSION['login'] = $donnees1['Nom'];
	$_SESSION['login_ok'] = true;
	header('location: index.php');
	
	
}
else if ($rows == 1){
	$_SESSION['login'] = $donnees['Nom'];
	$_SESSION['login_ok'] = true;
	if($_SESSION['login']=="BDE"){
		header('location: index.php');
	}
	else{
		header('location: index.php');
	}
	


}

else {

    echo "<script>alert('Mots de passe incorrect ');</script>";
	header('refresh: 0.3; url = connexion.php');

}




}

}

?>