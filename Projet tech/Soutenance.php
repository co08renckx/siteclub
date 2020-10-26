<?php

Class Soutenance {
	Public $id_Soutenance;
	Public $id_club;
	Public $intitule;
	Public $date_soutenance;
	Public $heure_soutenance;

	function __construct($id_club,$intitule,$date_soutenance,$heure_soutenance){
	$this->id_club = $id_club ;
	$this->intitule= $intitule;
  $this->date_soutenance = $date_soutenance ;
  $this->heure_soutenance = $heure_soutenance;
}
  function AddSoutenance(){

    $BDD=Database_Connexion();

    $sql ='INSERT INTO soutenance(id_club,intitule,date_soutenance,heure_soutenance) Values (:id_club,:intitule,:date_soutenance,:heure_soutenance)';

    $req=$BDD->prepare($sql);

    $req->execute(array(
  'id_club' => $this->id_club,
  'intitule' => $this->intitule,
  'date_soutenance' => $this->date_soutenance,
  'heure_soutenance' => $this->heure_soutenance,
  
  ));
    
   }

   function Setid($id){
      $this->id_Soutenance=$id ;
   }
    function deleteSoutenance($id){
    $BDD=Database_Connexion();
    $sql ='delete from soutenance where id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
   function AllSoutenance(){
    $BDD=Database_Connexion();
    $sql ='Select * from soutenance';
    $req=$BDD->query($sql);

    return $req ;


   }
}



 ?>