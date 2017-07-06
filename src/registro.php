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
				<h1>Registrate y Obten Nuestros Beneficios</h1>
				<p>Al registrarte tendras los beneficios que todo estudiante desea tener en su instituto o universidad al momento de hacer tus compras dentro de la institucion.</p>
				<ul>
					<li>Ahorras tiempo</li>
					<li>Menos preocupaciones por tu dinero y más enfoque en tus estudios</li>
					<li>Participar en los sorteos</li>
				</ul>
					
			</div>
			<div id="der">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<form id="form-login" action="procesar.php" method="post" >
                    <p><label for="nombre">Nombre de la Institucion:</label></p>
                        <input name="nombre" list="nombreI" id="nombre" autofocus=""/></p>
						<datalist id="nombreI">
							<option>Universidad San Ignacio de Loyola</option>
							<option>Universidad Peruana de Ciencias Aplicadas</option>
							<option>Pontificia Universidad Católica del Perú</option>
							<option>Instituto San Ignacio de Loyola</option>
							<option>Universidad del Pacífico</option>
							<option>Universad ESAN</option>
							<option>Universidad Nacional Mayor de San Marcos</option>
							<option>Universidad Nacional de Ingeniería</option>
							<option>Universidad Privada del Norte</option>
					</datalist>
                    <p><label for="codigo">Código:</label></p>
                        <input name="codigo" type="number" id="codigo" class="codigo" placeholder="Ingrese su código de estudiante" /></p> 
                    <p><label for="correo">Correo Electrónico:</label></p>
                        <input name="correo" type="text" id="correo" class="correo" placeholder="Ingrese su correo electrónico" /></p>
					<p><label for="pass">Contraseña:</label></p>
                        <input name="pass" type="password" id="pass" class="pass" placeholder="Ingrese su contraseña"/></p>
					<p><label for="repass">Repetir Contraseña:</label></p>
                        <input name="repass" type="password" id="repass" class="repass" placeholder="Vuelva a ingresar su contraseña" /></p>
					<p id="bot"><input name="submit" type="submit" id="boton" value="Registrarse" class="boton"/></p>
                </form>
			</div>
		</section>
		<footer id="footer">
			<p>&copy; 2017 SIPU</a></p>
		</footer>
	</body>
</html>
