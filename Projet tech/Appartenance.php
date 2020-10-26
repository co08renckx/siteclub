<?php

Class Appartenance {
	public $id_appartenance;
	Public $id_club;
	Public $id_membre;
	Public $fonctionmembre;


    function __construct($id_club,$id_membre,$fonctionmembre){
   	$this->id_club = $id_club ;
   	$this->id_membre = $id_membre;
   	$this->fonctionmembre= $fonctionmembre;

   


   	$BDD=Database_Connexion();
    $sql ='INSERT INTO appartenance (id_club,id_membre,fonctionmembre) Values (:id_club,:id_membre,:fonctionmembre)';
    $req=$BDD->prepare($sql);
    $req->bindValue('id_club', $this->id_club, PDO::PARAM_INT);
    $req->bindValue('id_membre',$this->id_membre, PDO::PARAM_INT);
    $req->bindValue('fonctionmembre', $this->fonctionmembre, PDO::PARAM_STR);
    $req->execute();
    
   	
   }

   /*function AddAppa(){
   

   	$BDD=Database_Connexion();
      $sql ='INSERT INTO appartenance (id_club,id_membre,function) Values (:id_club,:id_membre,:function)';
      $req=$BDD->prepare($sql);
      $req->bindValue('id_club', $this->id_club, PDO::PARAM_INT);
      $req->bindValue('id_membre',$this->id_membre, PDO::PARAM_INT);
      $req->bindValue('function', $this->function, PDO::PARAM_STR);
      $req->execute();
    $last_id = $BDD->lastInsertId();
    return $last_id;
   	
   }*/

   function FindALLAppartenance(){
      $BDD=Database_Connexion();
      $sql ='Select * from appartenance';
      $req=$BDD->query($sql);

      return $req ;
   }

   function FindAppartenanceByIDClub($id_club){
      $BDD=Database_Connexion();
      $sql ='Select * from appartenance where id_club='.$id_club;
      $req=$BDD->query($sql);

      return $req ;
   }
}

 ?>