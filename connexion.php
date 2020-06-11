<?php
   include_once("../data/user.php");
   $u= new User();
if(isset($_POST['connexion'])){
		extract($_POST);
		$user=$u->connect($login,$pwd);
		if $user(){
			echo "Connexion Reussie";
		}else {
			echo "Echec de connexion";
		}
		
		}
?>