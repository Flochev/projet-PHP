




<html>
<body>
<form action="ajoute.php" method="get" name ="test" id="test" >
	<p>
	<tr>
	<td > <a> prenom </a> </td>
	<td > <input type="text" class="form-control"   name="prenom"  OnFocus="this.value=''"> </td>
	</tr>
	<td > <a> nom de famille </a> </td>
	<td > <input type="text" class="form-control"   name="login" OnFocus="this.value=''"> </td>
	</tr>
	<tr>
	<td > <a> mdp </a> </td>
	<td > <input type="text" class="form-control"   name="password"  OnFocus="this.value=''"> </td>
	</tr>
	<tr>
	<tr>
	<td > <a> statut </a> </td>
	<td > <input type="text" class="form-control"   name="statut" OnFocus="this.value=''"> </td>
	</tr>
	<tr>
	<td > <a> age </a> </td>
	<td > <input type="text" class="form-control"   name="age" OnFocus="this.value=''"> </td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" class="form-control"  name="valider" value="valider" />
	</td>
	</tr>
	</form>

<?php
	
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
	$PARAM_mot_passe='w9sDH7zWBpmJkP'; 
	$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	
	$req = $connexion-> query("INSERT INTO acces (id,prenom,login,password,statut,age) VALUES ('', '".$a."', '".$b."', '".$c."', '".$d."', '".$e."')");
	 }
	 catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}
?>

<a href="liste.php"> RETOUR </a> 

</body>
</html>


