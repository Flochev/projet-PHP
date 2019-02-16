<?php

try{

$DB = new PDO('mysql:host=localhost; dbname=charfmrg_test', 'charfmrg_root', 'ledodo974');
if (isset($_GET['id'])) {
   $sql ='DELETE FROM acces WHERE id = "'.$_GET['id'].'"';
   $req = $DB->query($sql);
  
}
echo 'Nous venons de supprimer '.$_GET['id'].' de la base ainsi que tous ces disques';}
catch(PDOExeption $e){
	echo "Une erreur MySQL est arrivée";
}

 //header("Location: liste.php");

?>
