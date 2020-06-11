<?php

	function connexion()
		{
			# code...
			$cnx = new PDO( 'mysql:host=localhost;dbname=quizz;charset=utf8','root','');
			//$cnx = new PDO( 'mysql:host=mysql-gaanoaan.alwaysdata.net;dbname=gaanoaan_quizz;charset=utf8','gaanoaan','diawourydia1529');
	        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        
	        return $cnx;
		}

		function deconnexion()
		{
			# code...
			return mysqli_close();
		}
?>