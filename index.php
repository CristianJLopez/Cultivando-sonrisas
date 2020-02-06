 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Cultivando Sonrisas</title>
				<link rel="stylesheet" type="text/css" href="css/estilos.css">
					<link href="https://fonts.googleapis.com/css?family=Aclonica|Cookie|Lobster|Notable|Wendy+One" rel="stylesheet">
						<link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
							<link rel="stylesheet" type="text/css" href="css/fontello.css">

	</head>
	<body>
		<div class="logo">
			 <img src="imagenes/logo.png">
		</div>
		<div class="titulo">
			<h1></h1>
		</div>
		<div class="menu">
			<ul class="menuu">
				<ul>
					<li><a href="index.html">INICIO</a></li>
					<li><a href="huerta/huerta.html">LA HUERTA</a></li>
					<li><a href="nosotros/nosotros.html">NOSOTROS</a></li>
					<li><a href="tienda/tienda.html">TIENDA</a></li>
				</ul>		
		</div>
			<section id="banner">
				<img src="imagenes/banner.png">
				<div class="contenedor">
					<h2>Soberania Alimentaria</h2>
					<p>Niños de 5 a 15 años</p>
				</div>
			</section>
			<section id="bienvenidos">
				<h2>BIENVENIDOS A NUESTRA HUERTA</h2></br></br></br>
				<p>No hace falta vivir en el campo, tampoco tener un gran espacio. Cada vez son más quienes se animan a cultivar sus propios vegetales en terrazas o balcones.</p>
			</section>
			<section id="blog">
				<div class="contenedor">
					<article>
						<img src="imagenes/calabazas2.jpg">
						<h4>Alimentos organicos</h4>
					</article>
					<article>
						<img src="imagenes/sonrisas.jpg">
						<h4>Trabajo de campo</h4>
					</article>
					<article>
						<img src="imagenes/trabajo.jpg">
						<h4>Trabajo comunitario en la huerta</h4>
					</article>
					<article>
						<img src="imagenes/des.jpg">
						<h4>Construyendo deshidratador solar</h4>
					</article>
				</div>	
			</section>
		</div>
			<div class="aliados">
				<img src="imagenes/jbb.jpg"><img src="imagenes/echar.jpg"><img src="imagenes/funda.jpeg">
			</div>
		<footer>
				<div class="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.002612998473!2d-74.06989758464665!3d4.593552446662849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99ae5a7d7e47%3A0x1e945dd186d73c9d!2sEgipto%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2sus!4v1539826553877" width="800" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="contenedor">
					<p class="copy">Cultivando Sonrisas &copy; 2018</p>
				<div class="sociales">
						<a href="#" class="icon-facebook"></a>
						<a href="#" class="icon-instagram"></a>
						<a href="#" class="icon-gplus-squared"></a>
				</div>
				</div>
		</footer>
				<input id="mostrar-modal" name="modal" type="radio" /> 
  					<label for="mostrar-modal"> Contactenos </label>
  				<input id="cerrar-modal" name="modal" type="radio" /> 
					<label for="cerrar-modal"> X </label> 
		<div id="modal">
  			<table class="tabla1" border="3" align="center">
				<form action="enviar.php" method="post">
					<tr height="100">
						<td rowspan="2" align="center"><br/><img src="imagenes/logo.png"><br/><br/><b/>
							<button type="reset">LIMPIAR</button></td><br/><br/><br/><br/><br/>
		    			<td rowspan="2"  align="center"><form action="center" method="post">
									<br/><br/><br/><br/>	
						<div class="nombre">
							<label for="nombre"><b>NOMBRE</b></label>
							</br><input type="text" name="nombre" required="">
						</div>
									<br/><br/><br/><br/>
						<div class="telefono">
							<label for="telefono"><b>TELEFONO</b></label>
							</br><input type="text" name="telefono" required="">
						</div>
									<br/><br/><br/><br/>
						<div class="mensaje">
							<label for="mensaje"><b>MENSAJE</b></label>
							</br><textarea name="mensaje" placeholder="Escribe tu mensaje o solicitud, responderemos en breve" cols="50" required=""></textarea>
						</div>

								<br/><br/><br/></br><br/><br/><br/> 	 	 	
						<div class="boton">
							<button type="submit" value="enviar" id="boton">ENVIAR</button>
						</div></td>
		</form>		
		</table>
		</div>


	</body>
</html>