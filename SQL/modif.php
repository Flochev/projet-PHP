<html>
<body>


<form action="modif.php" method="get" name ="test" id="test" >

	<tr>
	<td > <a> prenom </a> </td>
	<td > <input type="text" class="form-control"   name="prenom"  value="<?php echo $_GET['prenom'];?>"""> </td>
	</tr>
	<td > <a> login </a> </td>
	<td > <input type="text" class="form-control"   name="login" value="<?php echo $_GET['login'];?>"""> </td>
	</tr>
	<tr>
	<td > <a> password </a> </td>
	<td > <input type="text" class="form-control"   name="password"  value="<?php echo $_GET['password'];?>"""> </td>
	</tr>
	<tr>
	<tr>
	<td > <a> statut </a> </td>
	<td > <input type="text" class="form-control"   name="statut" value="<?php echo $_GET['statut'];?>"""> </td>
	</tr>
	<tr>
	<td > <a> age </a> </td>
	<td > <input type="text" class="form-control"   name="age" value="<?php echo $_GET['age'];?>"""> </td>
	</tr>
	<tr>
	<td>
	</td>
	<td>
	<input type="submit" class="form-control"  name="valider" value="valider" />
	</td>
	</tr>
	</form>


</body>

</html>
<?php
	$z= $_GET['id'];
	$a= $_GET['prenom'];
	$b= $_GET['login'];
	$c= $_GET['password'];
	$d= $_GET['statut'];
	$e= $_GET['age'];
	 try {
	 $PARAM_hote='localhost';
	$PARAM_port='3306';
	$PARAM_nom_bd='charfmrg_test'; 
	$PARAM_utilisateur='charfmrg_root'; 
	$PARAM_mot_passe='ledodo974'; 

	$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	echo "update acces prenom='".$a."' , login='".$b."' ,password='".$c."',statut='".$d."',age='".$e."'   where id=".$z."";
	
	$req = $connexion-> query("update acces set prenom='".$a."' , login='".$b."' ,password='".$c."',statut='".$d."',age='".$e."'   where id=".$z."");
	 }
 catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}
?>

<a href="liste.php"> RETOUR </a> 
