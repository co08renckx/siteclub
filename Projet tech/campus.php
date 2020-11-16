<?php
// on utilise cette variable pour securiser l'acces a une page qui demande une connectoin
Class Campus{

   public $id ;
   public $campus;
    

 function __construct($Campus){
    $this->Campus = $Campus ;
}
  function AddEvent(){

    $BDD=Database_Connexion();

    $sql ='INSERT INTO campus (campus) Values (:campus)';

    $req=$BDD->prepare($sql);

    $req->execute(array(
  'campus' => $this->campus
  ));
    
   }
   function Setid($id){
      $this->id=$id ;
   }
    
   
    function AllCampus(){
    $BDD=Database_Connexion();
    $sql ='Select * from campus';
    $req=$BDD->query($sql);

    return $req ;


   }
   
 }





?>