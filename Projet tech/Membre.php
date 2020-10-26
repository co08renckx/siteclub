<?php  

Class Membre {
	public $id_membre;
	public $Nom;
	public $Promotion;
	public $Specialite;


	 function __construct($Nom,$Promotion,$Specialite){
   	$this->Nom = $Nom ;
   	$this->promotion= $Promotion;
   	$this->specialite= $Specialite;

   }

   function AddMembre(){
   

   	$BDD=Database_Connexion();
    $sql ='INSERT INTO membre (Nom,id_promotion,id_specialite) Values (:Nom,:id_promotion,:id_specialite)';
    $req=$BDD->prepare($sql);

    $req->bindValue('Nom', $this->Nom, PDO::PARAM_STR);
    $req->bindValue('id_promotion', $this->promotion, PDO::PARAM_STR);
    $req->bindValue('id_specialite', $this->specialite, PDO::PARAM_STR);
    $req->execute();
    $last_id = $BDD->lastInsertId();
    return $last_id;
   	
   }

    public function IdClub(){
    $BDD=Database_Connexion();
    $sql ='Select MAX(id) from club' ;
    $reqid=$BDD->query($sql);
    $r=$reqid->fetch(PDO::PARAM_INT);
    return $r ;

   }
   function FindMembreByID($id){
      $BDD=Database_Connexion();
      $sql ='Select * from membre where id='.$id;
      $req=$BDD->query($sql);
      $r=$req->fetch(PDO::FETCH_ASSOC);
      return $r ;
   }
}	

?>