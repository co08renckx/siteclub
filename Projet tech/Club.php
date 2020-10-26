<?php
require 'Database_connexion.php';
Class Club{

   public $id ;
   public $Nom;
   public $Type;
   public $Annee_universitaire; 
   public $date_creation ;
   public $chef_de_projet ;
   public $promotion;
   public $specialite ;
   public $Objectif ;
   public $Nom_Parrain ; 
   public $approuve_BDE;
   public $approuve_responsable;
   public $Email ;
   public $mdp ;
   

   function __construct ($Nom,$Type,$Annee,$datedecreation,$ChefDeProjet,$Promotion,$Specialite,$Objectif,$NomParrain,$email,$mdp){
   	$this->Nom = $Nom ;
   	$this->Type = $Type ;
   	$this->Annee_universitaire= $Annee;
   	$this->date_creation= $datedecreation;
   	$this->chef_de_projet= $ChefDeProjet;
   	$this->promotion= $Promotion;
   	$this->specialite= $Specialite;
   	$this->Objectif= $Objectif;
   	$this->Nom_Parrain= $NomParrain;
   	$this->approuve_BDE = 0 ;
   	$this->approuve_responsable = 0 ;
   	$this->Email = $email;
    $this->mdp = $mdp ;

   
    
   }
   function Addclub(){
    $BDD=Database_Connexion();
    $sql ='INSERT INTO Club (Nom,id_type,Annee_universitaire,Date_de_creation,chef_de_projet,id_promotion ,id_specialite,Objectif,Nom_Parrain,approuve_BDE,approuve_responsable,Email, mdp) Values (:Nom,:Type,:Annee_universitaire,:date_creation,:chef_de_projet,:promotion,:specialite,:Objectif,:Nom_Parrain,:approuve_BDE,:approuve_responsable,:Email,:Mdp)';
    $req=$BDD->prepare($sql);
    $req->bindValue('Nom', $this->Nom, PDO::PARAM_STR);
    $req->bindValue('Type',$this->Type, PDO::PARAM_STR);
    $req->bindValue('Annee_universitaire', $this->Annee_universitaire, PDO::PARAM_STR);
    $req->bindValue('date_creation', $this->date_creation, PDO::PARAM_STR);
    $req->bindValue('chef_de_projet', $this->chef_de_projet, PDO::PARAM_STR);
    $req->bindValue('promotion', $this->promotion, PDO::PARAM_STR);
    $req->bindValue('specialite',$this->specialite, PDO::PARAM_STR);
    $req->bindValue('Objectif', $this->Objectif, PDO::PARAM_STR);
    $req->bindValue('Nom_Parrain', $this->Nom_Parrain, PDO::PARAM_STR);
    $req->bindValue('approuve_BDE', $this->approuve_BDE, PDO::PARAM_STR);
    $req->bindValue('approuve_responsable', $this->approuve_responsable, PDO::PARAM_STR);
    $req->bindValue('Email', $this->Email, PDO::PARAM_STR);
    $req->bindValue('Mdp', $this->mdp, PDO::PARAM_STR);

    $req->execute();
    $last_id = $BDD->lastInsertId();
    return $last_id;

   
    

   }
   public function ValidClubBde($id){
    $BDD=Database_Connexion();
    $sql ='UPDATE Club SET approuve_BDE=1 where id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
   public function RefuseClubBde($id){
    $BDD=Database_Connexion();
    $sql ='UPDATE Club set approuve_BDE=2 where approuve_BDE=0 and id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
   
   function getId(){
     return $this->id;
   }

   function getNom(){
     return $this->Nom;
   }

   function Setid($id){
      $this->id=$id ;
   }
   function ValidClubResponsable($id){
    $BDD=Database_Connexion();
    $sql ='UPDATE Club set approuve_responsable=1 where approuve_BDE = 1 and id='.$id;
    $req=$BDD->query($sql);

    return $req ;
    
   }
   function RefuseClubResponsable($id){
    $BDD=Database_Connexion();
    $sql ='UPDATE Club set approuve_responsable=2 where id='.$id;
    $req=$BDD->query($sql);

    return $req ;
    
   }
   function deleteClubBde($id){
    $BDD=Database_Connexion();
    $sql ='UPDATE Club set approuve_BDE=2,approuve_responsable=2 where id='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
   function idClub($identifiant){
    $BDD=Database_Connexion();
    $sql ='Select * from Club where id ='.$identifiant;
    $req=$BDD->query($sql);

    return $req ;

   }
   function FindClub($id){
    $BDD=Database_Connexion();
    $sql ='select * from Club where id ='.$id;
    $req=$BDD->query($sql);

    return $req ;

   }
   function FindClubEmail($id){
    $BDD=Database_Connexion();
    $sql ='select Email from Club where id ='.$id;
    $req=$BDD->query($sql);
    

    return $req ;

   }
   function FindClubUntreatedBDE(){
    $BDD=Database_Connexion();
    $sql ='Select * from Club where approuve_BDE=0';
    $req=$BDD->query($sql);

    return $req ;
    
   }
    function FindClubtreatedBDE(){
    $BDD=Database_Connexion();
    $sql ='Select * from Club where approuve_BDE=1';
    $req=$BDD->query($sql);

    return $req ;
    
   }
   function FindClubUntreatedResponsable(){
    $BDD=Database_Connexion();
    $sql ='Select * from Club where approuve_responsable=0 and approuve_BDE=1';
    $req=$BDD->query($sql);

    return $req ;
    
   }
    function FindClubtreatedResponsable(){
    $BDD=Database_Connexion();
    $sql ='Select * from Club where approuve_responsable=1 and approuve_BDE=1';
    $req=$BDD->query($sql);

    return $req ;
    
   }
   function AllClubTreated(){
    $BDD=Database_Connexion();
    $sql ='Select * from Club where approuve_responsable=1 and approuve_BDE=1';
    $req=$BDD->query($sql);

    return $req ;
    
   }
}
  ?>