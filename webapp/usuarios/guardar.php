<?php
require '../../user/pass.php';
$usu=$_POST["usuario"];
$pass=password_hash($_POST["pass"], PASSWORD_DEFAULT);
$nom=$_POST["nombre"];
$cor=$_POST["correo"];
$per=$_POST["perfil"];
$sql="INSERT INTO `wa_users` (`id`, `user`, `pass`, `nombre`, `correo`, `perfil`) VALUES (NULL, '$usu', '$pass', '$nom', '$cor', '$per')";
$result = mysqli_query($conn, $sql);
if($result){
	echo"<script>alert('Usuario creado exitosamente');</script>";
}else{
	echo"<script>alert('Usuario NO fue creado');</script>";
}
?>
