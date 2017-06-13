<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<form name="formIndex" id="formIndex" method="post">
	<div id="container">
		<div>
		<label>Usuario :</label>
		 <input type="text" id="usuario" name="usuario">
		</div>
		<div>
           <label>Contraseña :</label>
		 <input type="text" id="clave" name="clave">
		</div>
		<div>
		<input type="submit" id="ingresar" name="ingresar">
		<a href="registrar.php">Registrate aqui</a>
		</div>
	</div>
</form>


</body>
</html>