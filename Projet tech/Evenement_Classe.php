<?php

Class Evenement{

   public $id ;
   public $Nom;
   public $Campus;
   public $Annee_universitaire; 
   public $Horaire_debut;
   public $Horaire_fin;
   public $Type ;
   public $Lieu;
   public $date_evenement ;
   public $Objectif ;
   public $id_club ;
   public $Responsable;
   public $Aide_financiere ; 
   public $montant;
   public $approuve_bde;
   public $approuve_responsable;
    

 function __construct($Nom,$Campus,$Annee,$Horaire_debut,$Horaire_fin,$Type,$Lieu,$date_evenement,$Objectif,$id_club,$Responsable,$Aide_financiere,$montant ){
    $this->Nom = $Nom ;
    $this->Campus = $Campus ;
    $this->Annee_universitaire= $Annee;
    $this->Horaire_debut= $Horaire_debut;
    $this->Horaire_fin= $Horaire_fin;
    $this->Type = $Type ;
    $this->Lieu = $Lieu ;
    $this->date_evenement= $date_evenement;
    $this->Objectif= $Objectif;
    $this->id_club = $id_club ;
    $this->Responsable = $Responsable ;
    $this->Aide_financiere = $Aide_financiere ;
    $this->montant = $montant;
    $this->approuve_bde = '0' ;
    $this->approuve_responsable = '0' ;

}
  function AddEvent(){

    $BDD=Database_Connexion();

    $sql ='INSERT INTO evenement (Nom, id_campus, date_evenement, Horaire_debut, Horaire_fin, Lieu, Type_evenement, Annee_universitaire, id_club, Responsable, Objectif, Aide_financiere, Montant, approuve_bde, approuve_responsable) Values (:Nom,:id_campus,:date_evenement,:Horaire_debut,:Horaire_fin,:Lieu,:Type_evenement,:Annee_universitaire,:id_club,:Responsable,:Objectif,:Aide_financiere,:Montant,:approuve_bde,:approuve_responsable)';

    $req=$BDD->prepare($sql);
            
            $req->bindValue('Nom', $this->Nom, PDO::PARAM_STR);
            $req->bindValue('id_campus',$this->Campus, PDO::PARAM_STR);
            $req->bindValue('date_evenement', $this->date_evenement, PDO::PARAM_STR);
            $req->bindValue('Horaire_debut', $this->Horaire_debut, PDO::PARAM_STR);
            $req->bindValue('Horaire_fin', $this->Horaire_fin, PDO::PARAM_STR);
            $req->bindValue('Lieu', $this->Lieu, PDO::PARAM_STR);
            $req->bindValue('Type_evenement',$this->Type, PDO::PARAM_STR);
            $req->bindValue('Annee_universitaire', $this->Annee_universitaire, PDO::PARAM_STR);
            $req->bindValue('id_club', $this->id_club, PDO::PARAM_STR);
            $req->bindValue('Responsable', $this->Responsable, PDO::PARAM_STR);
            $req->bindValue('Objectif', $this->Objectif, PDO::PARAM_STR);
            $req->bindValue('Aide_financiere', $this->Aide_financiere, PDO::PARAM_STR);
            $req->bindValue('Montant', $this->montant, PDO::PARAM_STR);
            $req->bindValue('approuve_bde', $this->approuve_bde, PDO::PARAM_STR);
            $req->bindValue('approuve_responsable', $this->approuve_responsable, PDO::PARAM_STR);
        
            $req->execute();

            $fichier = fopen("testdesvarevent.txt","a");
            $donnees= $this->Nom."/".$this->Campus."/".$this->date_evenement."/".$this->Horaire_debut."/".$this->Horaire_fin."/".$this->Lieu."/".$this->Type."/".$this->Annee_universitaire."/".$this->id_club."/".$this->Responsable."/".$this->Objectif."/".$this->Aide_financiere."/".$this->montant."/".$this->approuve_bde."/".$this->approuve_responsable."\n";
            fwrite($fichier,$donnees);
            fclose($fichier);


   /* $req->execute(array(
  'Nom' => $this->Nom,
  'id_campus' => $this->Campus,
  'date_evenement' => $this->date_evenement,
  'Horaire_debut' => $this->Horaire_debut,
  'Horaire_fin' => $this->Horaire_fin,
  'Lieu' => $this->Lieu,
  'Type_evenement' => $this->Type,
  'Annee_universitaire' => $this->Annee_universitaire,
  'id_club' => $this->id_club,
  'Responsable' => $this->Responsable,
  'Objectif' => $this->Objectif,
  'Aide_financiere' => $this->Aide_financiere,
  'Montant' => $this->montant,
  'approuve_bde' => $this->approuve_bde,
  'approuve_responsable' => $this->approuve_responsable,
  ));*/
    
    
   }
   function Setid($id){
      $this->id=$id ;
   }
    function deleteEventBde($id){
    $BDD=Database_Connexion();
    $sql ='delete from Evenement where id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
    function ValidEventBde($id){
    $BDD=Database_Connexion();
    $sql ='Update Evenement set approuve_bde=1 where id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
   function RefuseEventBde($id){
    $BDD=Database_Connexion();
    $sql ='Update Evenement set approuve_bde=2 where id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
    function ValiderEventResponsable($id){
    $BDD=Database_Connexion();
    $sql ='Update Evenement set approuve_responsable=1 where approuve_bde=1 and id='.$id;
    $req=$BDD->query($sql);

    return $req ;
  }
    function RefuseEventResponsable($id){
    $BDD=Database_Connexion();
    $sql ='Update Evenement set approuve_responsable=2 where  id='.$id;
    $req=$BDD->query($sql);

    return $req ;
}
    function Eventday($day){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where date_evenement='.$day;
    $req=$BDD->query($sql);

    return $req ;


   }
    function FindEventUntreatedBDE(){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where approuve_bde=0';
    $req=$BDD->query($sql);

    return $req ;


   }
    function FindEventtreatedBDE(){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where approuve_bde=1';
    $req=$BDD->query($sql);

    return $req ;


   }

 function FindEventUntreatedResponsable(){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where approuve_responsable=0 and approuve_bde=1';
    $req=$BDD->query($sql);

    return $req ;


   }
    function FindEventtreatedResponsable(){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where approuve_responsable=1 and approuve_bde=1';
    $req=$BDD->query($sql);

    return $req ;


   }
   function FindEventUntreatedClub($id){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where approuve_responsable=0 or approuve_bde=0 and id_club = '.$id;
    $req=$BDD->query($sql);

    return $req ;


   }
   function FindEventtreatedClub($id){
    $BDD=Database_Connexion();
    $sql ='Select * from Evenement where approuve_responsable=1 and approuve_bde=1 and id_club = '.$id;
    $req=$BDD->query($sql);

    return $req ;


   }
 }

 ?>

   
   










  