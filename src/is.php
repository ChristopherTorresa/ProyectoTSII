<!doctype html>
<html>
	<head>
		<link href="estilo.css" rel="stylesheet" />
		<title>Proyecto final</title>
	</head>
	<body>
		<header id="cabeza">
			<a id="logo" href="">
			<span class="sitio-nombre">SIPU</span>
			<span class="creadores">Christopher / Diego / Giancarlo / Gustavo</span>
			</a>

			<nav>
				<ul>
					<li><a href="is.php">Iniciar Sesion</a></li>
					<li><a href="">Acerca de</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
		</header>
		<section id="cuerpo">
			<div id="izquierda">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<h1>Inicia Sesión y ¡preocupate menos!</h1>
				
				<img src="http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-aqua/iconathon/iconathon_cafeteria/iconathon_cafeteria_flat-circle-white-on-aqua_512x512.png"/>
			</div>
			<div id="der">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<form id="form-login" action="procesar.php" method="post" >
                    
                   
                    <p><label for="correo">Correo:</label></p>
                        <input name="correo" type="text" id="correo" class="correo" placeholder="Ingrese su correo electrónico" /></p>
					<p><label for="pass">Contraseña:</label></p>
                        <input name="pass" type="password" id="pass" class="pass" placeholder="Ingrese su contraseña"/></p>
					
					<p id="bot"><input name="submit" type="submit" id="boton" value="Entrar" class="boton"/></p>
                </form>
			</div>
		</section>
		<footer id="footer">
			<p>&copy; 2017 SIPU</a></p>
		</footer>
	</body>
</html>
