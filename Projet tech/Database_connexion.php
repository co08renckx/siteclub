<?php 
function Database_Connexion(){

$dsn = "mysql:host=localhost;dbname=projet_tech";
$user = "root";
$passwd = "root";
try {
    $pdo = new PDO($dsn, $user, $passwd);
}
catch(PDOException $e){
    echo $e->getMessage();
}

return  $pdo ;

}
 ?>