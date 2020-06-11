<?php
   	include_once("../data/user.php");
	if(isset($_POST['connexion'])){
		extract($_POST);
		$user = connect($login,$pwd);
		if ($user){
			session_start();
			$_SESSION['nom'] = $user['nom'];
			echo $_SESSION['nom'];
			echo "Connexion Reussie";
			if($user['profil'] == "admin"){
				require_once '../pages/accueilAdmin.php';
			}
		}else {
			echo "Echec de connexion";
		}
		
	}
?>