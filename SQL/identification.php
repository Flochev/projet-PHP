<html><body>

<br/><br/><a>BIENVENUE</a><br/><br/>

<img src="http://www.letribunaldunet.fr/wp-content/uploads/2017/04/donald-trump-pouce-leve-610x406.jpg">

<br/><br/>

<form action="liste.php" method="post">

<button type="submit">Liste SQL </button>

</body></html>



<?php
    $id =$_POST["id"];
    $mdp =$_POST["mdp"];

if ("crepo" == $id AND "nutella" == $mdp ) { 
    	session_start();
    
        
       
    echo("Bonjour tu est connecte");
    }
    
else{
    header ("location: login.php?error=is");
    }
?>