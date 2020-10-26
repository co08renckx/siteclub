<?php


/**
 * 
 */
class Specialite 
{
	public $id ;
   	public $libelle;

	function __construct($libelle)
	{
		$this->libelle = $libelle ;
	}
	function FindALLSpecialite(){
   		$BDD=Database_Connexion();
    	$sql ='Select * from specialite';
    	$req=$BDD->query($sql);

    	return $req ;
   }

   function FindSpecialiteByID($id){
   		$BDD=Database_Connexion();
    	$sql ='Select * from specialite where id='.$id;
    	$req=$BDD->query($sql);
    	$r=$req->fetch(PDO::FETCH_ASSOC);
    	return $r ;
   }
}





?>