<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
	
?>
<body>
	<?php
		include("header.php");
	?>
	<form action="traitements/connexion.php" method="POST" id="form-cnx">
		<div class="login">
			<div class="login-header">
				<span>Login form</span>
			</div>
			<div class="textbox">
				<input type="text" name="login" placeholder="Login" />
				<i><img src="public/icones/ic-login.png"></i>
			</div>
			<div class="textbox">
				<input type="password" name="pwd" placeholder="Mot de passe">
				<i><img src="public/icones/pwd.jpeg"></i>
			</div>
			<div class="btn">
				<input type="submit" name="connexion" value="Connexion" id="">
				<a href="vues/createJoueur.php">S'inscrire pour jouer?</a>
			</div>
		</div>
	</form>

</body>
</html>