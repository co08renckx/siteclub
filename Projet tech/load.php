<?php
require 'Database_connexion.php';


$connect = Database_Connexion();

$data = array();

$query = "SELECT e.id as id,  e.nom as Nom, e.date_evenement as date_evenement, e.Horaire_debut as Horaire_debut, e.Horaire_fin as Horaire_fin, e.Lieu as Lieu, e.Type_evenement as Type,
e.Annee_universitaire as Annee_universitaire,c.Nom as Nom_club,cc.campus as Campus,e.Objectif as Objectif,e.Responsable as Responsable 
FROM evenement  e, Club c, Campus cc where e.approuve_bde =1 and e.approuve_responsable = 1  and e.id_club=c.id and e.id_campus=cc.id ORDER BY e.id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


foreach($result as $row)
{
	

 $data[] = array(
  'namee' => "event",
  'id'   => $row["id"],
  'title'   => $row["Nom"],
  'start'   => $row["date_evenement"],
  'end'   => $row["date_evenement"],
  'Horaire_debut'   => $row["Horaire_debut"],
  'Horaire_fin'   => $row["Horaire_fin"],
  'Objectif'   => $row["Objectif"],
  'Campus'   => $row["Campus"],
  'Nom_club'   => $row["Nom_club"],
  'Annee_universitaire'   => $row["Annee_universitaire"],
  'Lieu'   => $row["Lieu"],
  'Type'   => $row["Type"],
  'Responsable'   => $row["Responsable"],

 );
}
$query = "SELECT e.id as id,  e.intitule as Nom, e.date_soutenance as date_evenement, e.heure_soutenance as Horaire_debut,
c.Nom as Nom_club FROM soutenance  e, Club c where c.approuve_bde =1 and c.approuve_responsable = 1  and e.id_club=c.id ORDER BY e.id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
foreach($result as $row)
{
  

 $data[] = array(
  'namee' => "soutenance",
  'id'   => $row["id"],
  'title'   => $row["Nom"],
  'start'   => $row["date_evenement"],
  'end'   => $row["date_evenement"],
  'Horaire_debut'   => $row["Horaire_debut"],
  'Nom_club'   => $row["Nom_club"],
  

 );
}
echo json_encode($data);

?>