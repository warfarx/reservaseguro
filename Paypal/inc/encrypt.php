<?php
include("crypt.php");
if(!isset($_POST["correo"])){
	$email = "";
}
else{
	$cadena = encrypt($_POST["correo"],"Manaosuvita10");
	echo '<h3>Email encriptado, cadena encriptada: '.$cadena.'</h3><h3>email sin encriptar: '.$_POST["correo"];
	$email = "";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Encriptar correo</title>
</head>
<body>
<form method="post" action="">
	<input type="text" name="correo" value="<?php echo $email; ?>" placeholder="prueba@gmail.com">
	<button type="submit">encriptar</button>
</form>
</body>
</html>