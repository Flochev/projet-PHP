<!DOCTYPE html>
<html>
<body>

<a href="ajoute.php"><img src= "ajoute.png" width="17" /></a>

<?php


try{
 $DB = new PDO('mysql:host=localhost; dbname=charfmrg_test', 'charfmrg_user', 'g3wDM6GxTy1XrHQtSe');
}
catch(PDOExeption $e){
	echo "Une erreur MySQL est arrivée";
}
   $sql ='SELECT id,prenom,login,statut,age FROM acces';
   $req = $DB->query($sql);
  
   while ($d = $req->fetch()) 
   {
   	echo "</br>";
   	echo '<b>'.$d['prenom'].' '.$d['login'].'</b> ('.$d['statut'].')';
    echo ' <i>age : '.$d['age'].'</i><br>';
    echo '<b/><a href="efface.php?id='.$d['id'].'"><img src= "croix.png" width="17" /></a></br></b>';
    echo '<b/><a href="modif.php?id='.$d['id'].'"><img src= "modif.png" width="17" /></a></br></b>';


   }

?>
</body>
</html>