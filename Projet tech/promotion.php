<?php

Class Promotion{

   public $id ;
   public $libelle;
 
   function __construct ($libelle){
   	$this->libelle = $libelle ;
   }

   function FindALLPromotion(){
   	$BDD=Database_Connexion();
    $sql ='Select * from promotion';
    $req=$BDD->query($sql);

    return $req ;
   }

   function FindPromotionByID($id){
   	$BDD=Database_Connexion();
    $sql ='Select * from promotion where id='.$id;
    $req=$BDD->query($sql);
    $r=$req->fetch(PDO::FETCH_ASSOC);
    return $r ;
   }
 }
?>