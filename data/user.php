<?php
	include_once("DB_MGR.php");

		function save_user($nom, $prenom,$profil,$login,$pwd) {
			$cnx = connexion();
			$rqt="INSERT INTO user(nom,prenom,profil,login,password) values('$nom', '$prenom','$profil','$login','$pwd')";
			$req = $cnx->prepare($rqt);
			$exe = execute();
			return $exe;
		}
		function list_user(){
			$rqt="SELECT * FROM user";
			$exe=$this->execute($rqt);
			$tab=$this->parcours($exe);
				return $tab;
		}
		function connect($login,$pwd){
			$cnx = connexion();
			$rqt = "SELECT * FROM user WHERE login='$login' AND password='$pwd'";
			$req = $cnx->prepare($rqt);
			$req->execute(array('login'=>$login, 'password'=>$pwd ));
			$tab = $req->fetch();
			return $tab;
		}
   
?>