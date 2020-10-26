<?php


class Type 
{
	public $id ;
   	public $libelle;

	function __construct($libelle)
	{
		$this->libelle = $libelle ;
	}
	function FindALLType(){
   		$BDD=Database_Connexion();
    	$sql ='Select * from type';
    	$req=$BDD->query($sql);

    	return $req ;
   }

   function FindTypeByID($id){
   		$BDD=Database_Connexion();
    	$sql ='Select * from type where id='.$id;
    	$req=$BDD->query($sql);
    	$r = $req->fetch(PDO::FETCH_ASSOC);
    	return $r ;
   }
}



?>