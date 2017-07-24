<?php
require '../../user/pass.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pais emprendedor Web APP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
			
				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Pais Emprendedor Web APP</a>
					</header>


				<!-- Main -->
					<div id="main" >
						<div class="login">
							<form action="guardar.php" id="crear" class="form-center" method="post" target="marco">
								<label><b>Nombre Completo</b></label>
								<input type="text" placeholder="ingrese su nombre" id="nombre" name="nombre" required>
								<label><b>Correo Electronico</b></label>
								<input type="email" placeholder="correo@correo.com" id="correo" name="correo" required>
								<label><b>Usuario</b></label>
								<input type="text" placeholder="Ingrese Su Usuario" id="usuario" name="usuario" required>
								<label><b>Ingrese Contraseña</b></label>
								<input type="password" placeholder="Ingrese su contraseña" id="pass" name="pass" required onchange="check()">
								<label><b>Verifique Contraseña</b><b id="verpass"></b></label>
								<input type="password" placeholder="Ingrese su contraseña" id="vpass" required onchange="check()">
								<label><b>Seleccione el perfil</b></label>
								<select id="perfil" name="perfil">
									<option value="0">Selecciones una opción</option>
									<?php
										$sql="SELECT * FROM `wa_profile`";
										$result = mysqli_query($conn, $sql);
										while($row = mysqli_fetch_assoc($result)) {
											$id=$row["id"];
											$det=$row["detalle"];
											echo "<option value='$id'>$det</option>";
										}
									?>
								</select>
								
								<button type="button" onclick="enviar()">Guardar</button>	
							</form>
						</div>
					</div>
			</div>
			<iframe id="marco" name="marco">
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script>
				function check() {
;					
					var pass,vpass, text;

					// Get the value of the input field with id="numb"
					pass = document.getElementById("pass").value;
					vpass = document.getElementById("vpass").value;
					// If x is Not a Number or less than one or greater than 10
					if (pass==vpass) {
						text = " -> Las contraseñas coinciden";
						
					} else {
						text = " -> No coinciden las contraseñas";
					}
					document.getElementById("verpass").innerHTML = text;
				}
				function enviar(){
					usu=document.getElementById("usuario").value;
					pas=document.getElementById("pass").value;
					vpas=document.getElementById("vpass").value;
					
					nom=document.getElementById("nombre").value;
					
					cor=document.getElementById("correo").value;
					
					per=document.getElementById("perfil").value;
					
					 if(nom==''){
						 alert(nom);
						document.getElementById("nombre").focus()
					}else if(cor==''){
						alert(cor);
						document.getElementById("correo").focus()
					}else if(usu==''){
						alert(usu);
						document.getElementById("usuario").focus();
					}else if(pas==''){
						alert(pas);
						document.getElementById("pass").focus()
					}else if(vpas!=pas){
						alert(vpas);
						document.getElementById("vpass").focus()
					}else if(per == 0){
						alert(per);
						document.getElementById("perfil").focus()
					}else{
						alert("enviando ...");
					}
					document.getElementById("crear").submit();
					
				}
			</script>

	</body>
</html>