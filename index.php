<?php

	session_start();
	
	if(isset($_SESSION['id_user'])){
	$seccion=$_SESSION['id_user'];
    $nombre = $_SESSION['nombre'];
    }else{
    	
    }


?>

<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Lab Ing Quimica :: CUCEI</title>
		
		
		
		<!--[if lt IE 9]>
			<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="js/jquery-1.6.4.min.js"></script>
		
		<!--  <script src="js/less-grid-4.js"></script> -->
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		
		<!-- Masonry -->
		<script src="js/masonry.min.js" ></script>
		<script src="js/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
		<script src="js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Allan:700' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		<!-- Login-->
		<link rel="stylesheet" href="css/login.css" />
		<script src="js/login.js"></script>
		<!-- Login-->
		
		<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6-hacks.css" media="screen" />
		<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		
		<!-- Lessgrid -->
		<link rel="stylesheet" media="all" href="css/lessgrid.css"/>
		
		<!-- modernizr -->
		<script src="js/modernizr.js"></script>


		

	</head>
	
	<body lang="en">
		<!-- login -->
<?php
if(isset($_SESSION['id_user'])){
	echo $nombre;
    echo"<br>";
    echo $seccion;
    echo"<br>";
    echo "<a href='salir.php'>Salir aqui</a>";

}else{ 
	echo       " <div id='loginContainer'>";
     echo      "        <a href='#'' id='loginButton'><span>Entrar</span><em></em></a>";
     echo      "        <div style='clear:both'></div>";
     echo      "        <div id='loginBox'>                ";
      echo     "           <form id='loginForm' name='loginForm'>";
      echo     "              <fieldset id='body'>";
     echo      "                 <fieldset>";
     echo      "                     <label for='email'>Codigo</label>";
     echo      "                     <input type='text' name='codigo' id='codigo' placeholder='304679733'  title='Codigo de alumno/maestro' maxlength=12 required />";
     echo      "                 </fieldset>";
     echo      "                 <fieldset>";
     echo      "                     <label for='password'>Contraseña</label>";
     echo      "                     <input type='password' name='pass' id='pass' placeholder='********' text='contraseña' maxlength=12 required/>";
      echo     "                 </fieldset>";
     echo      "                 <a href='#' id='login'  onClick='return ingresa();'> Enviar </a>";
     echo      "                <label for='checkbox'><input type='checkbox' id='checkbox' />Recuerdame</label>";
    echo       "             </fieldset>";
     echo      "             <span><a href='#'>olvidaste tu contraseña?</a></span>";
     echo      "         </form>";
     echo      "     </div>";
     echo      " </div>";

}

?>

	

		<!-- mobile-nav -->
		<div id="mobile-nav-holder">
			<div class="wrapper">
				<ul id="mobile-nav">
					<li  class="current-menu-item"><a href="index.html">Inicio</a></li>
					<li><a href="maestros.html">Maestros</a></li>
					<li><a href="page.html">Practicas</a>
						<ul>
							<li><a href="#">Unidad  1 </a></li>
							<li><a href="#">Unidad  2 </a></li>
							<li><a href="#">Unidad  3 </a></li>
							<li><a href="#">Unidad  4 </a></li>
							<li><a href="#">Unidad  5 </a></li>
							<li><a href="#">Unidad  6 </a></li>
							<li><a href="#">Unidad  7 </a></li>
							<li><a href="#">Unidad  8 </a></li>
							
						</ul>
					</li>
					<li><a href="alumno.html">Alumnos</a></li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="labora.html">Laboratorio</a></li>
				</ul>
				<div id="nav-open"><img src="img/dummies/menu.jpg"></div>
			</div>
		</div>
		<!-- ENDS mobile-nav -->
			
		<header>
			
				
			<div class="wrapper">
					
				<a href="index.html" id="logo"><img  src="img/logo.png" alt="Tandem"></a>
				
				<nav>
					<ul id="nav" class="sf-menu">
						<li class="current-menu-item"><a href="index.html">Inicio<span class="subheader">Bienvenido</span></a></li>
						<li><a href="maestros.html">Maestros<span class="subheader">Docentes</span></a></li>
						<li><a href="page.html">Practicas<span class="subheader">Practicas del semestre</span></a>
							<ul>
								<li><a href="#">Unidad  1 </a></li>
								<li><a href="#">Unidad  2 </a></li>
								<li><a href="#">Unidad  3 </a></li>
								<li><a href="#">Unidad  4 </a></li>
								<li><a href="#">Unidad  5 </a></li>
								<li><a href="#">Unidad  6 </a></li>
								<li><a href="#">Unidad  7 </a></li>
								<li><a href="#">Unidad  8 </a></li>
							</ul>
						</li>
						<li><a href="alumno.html">Alumnos<span class="subheader">Servicio y Practicas</span></a></li>
						<li><a href="contacto.html">Contacto<span class="subheader">Hablanos</span></a></li>
						<li><a href="labora.html">Laboratorio<span class="subheader">Conosenos</span></a></li>
						
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
		</header>
	
	
	
	
		<!-- MAIN -->
		<div id="main">
				
			<!-- social -->
			<div id="social-bar">
				<ul>
					<li><a href="http://www.facebook.com"  title="hazte fan"><img src="img/social/facebook_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.twitter.com" title="Siguenos en Twitter"><img src="img/social/twitter_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.google.com"  title="Agreganos a tus Circulo"><img src="img/social/google_plus_32.png" alt="Facebook" /></a></li>
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
				<!-- slider -->
		        <div class="flexslider home-slider">
				  <ul class="slides">
				    <li>
				      <img src="fotos/wall1.jpg"   alt="alt text" />
				      <p class="flex-caption">Edificio central de la UDG </p>
				    </li>
				    <li>
				      <img src="fotos/wall2.jpg"  alt="alt text" />
				      <p class="flex-caption">Equipo de Futbol de los LEONES negros de la UDG</p>
				    </li>
				    <li>
				      <img src="fotos/wall3.jpg"  alt="alt text" />
				      <p class="flex-caption">Simulacion de un ataque de dragon sin consideracion a su raza</p>
				    </li>
				    <li>
				      <img src="fotos/wall4.jpg"  alt="alt text" />
				       <p class="flex-caption">Una imagen futurista sobre la invacion del espacio hacia la tierra o algo asi por el estilo :)</p>
				    </li>
				  </ul>
				</div>
				<div class="shadow-slider"></div>
	        	<!-- ENDS slider -->
	        	
	        	
	        	<!-- Headline -->
	        	<div class="headline">
	        		Laboratorio de ingenieria Quimica
	        	</div>
	        	<!-- ENDS Headline -->
	        	
	        	
	        	
	        	<!-- featured -->
	        	<h1 class="home-block-heading">Avisos, Noticias y Mas</h1>
	        	<div class="featured">
	        		<figure>
	        			<a href="img/dummies/full-1.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/dos.jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">XIV Congreso Internacional de Inocuidad de Alimentos</a>
		        			 8, 9 y 10 de Noviembre del 2012 en Puerto Vallatra Jalisco.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		
	        		
	        		<figure>
	        			<a href="img/dummies/full-2.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/dos (2).jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">Programa PREVENIMSS en CUCEI</a>
		        			Modus comes with a set of various page layouts to help you build a complete site.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<figure>
	        			<a href="img/dummies/full-3.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/dos (1).png" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">La División de Ingenierías realiza el 1er Festival literario de Calaveras</a>
		        			En el marco del tradicional día de muertos que se festeja el día dos de noviembre y con el fin de fomentar, impulsar, celebrar, resguardar y fortalecer las tradiciones culturales, la División de Ingenierías del Centro Universitario de Ciencias Exactas e Ingenierías, llevó a cabo el 1er Festival Literario de Calaveras.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<figure>
	        			<a href="img/dummies/full-4.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/dos (3).jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">El Dr. Martín Flores Martínez participa en el seminario de Química</a>
		        			Tratamientos superficiales de aleaciones biomédicas para hacerlas resistentes a la corrosión y  desgaste, es el título de la ponencia que el Dr. Martín Flores Martínez presentará el día de hoy 6 de noviembre a las 13:00 hrs. en el seminario de Química que se realiza todos los martes en el auditorio Ing. Antonio Rodríguez, del Centro Universitario de Ciencias Exactas e Ingenierías.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<figure>
	        			<a href="img/dummies/full-5.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/dos (4).jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">SEMS contribuye al desarrollo de una universidad sustentable</a>
		        			El Sistema de Educación Media Superior (SEMS) de la Universidad de Guadalajara cuenta con diversos proyectos enfocados a la educación para la sustentabilidad y conservación del medio ambiente que han logrado importantes resultados en los sectores sociales. Algunos de ellos son reforestación en el bosque de La Primavera, limpieza en playas y en el lago de Chapala, la conservación y protección a la tortuga marina, entre otros. 
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		
	        		<figure>
	        			<a href="img/dummies/full-6.jpg" data-rel="prettyPhoto" class="thumb"><img src="img/dummies/dos (5).jpg" alt="Alt text" /></a>
	        			<div>
	        				<a href="single.html" class="heading">2a. Feria de la Salud</a>
		        			Universidad de Guadalajara
								Secretaría General
									¡Porque me quiero me cuido!  
									<a href="http://www.luiszuno.com/blog/work" >stay tuned</a>.
		        		</div>
		        		<a class="link" href="single.html"></a>
	        		</figure>
	        		
	        		<div class="clearfix"></div>
					        		
	        	</div>
	        	<!-- ENDS featured -->
	        	
	        	
	        	<!-- text-posts -->
	        	<h1 class="home-block-heading">Numeros de emergencia</h1>
	        	<ul class="text-posts">
	        		<li>
	        			<a  class="heading"><img src="fotos/poli.png"></a>
	        			Policia  - 3617-4655
	        		</li>
	        		
	        		<li>
	        			<a  class="heading"><img src="fotos/bom.png"></a>
	        			Bomberos   -  3619-0794
	        		</li>
	        		
	        		<li>
	        			<a  class="heading"><img src="fotos/cruz.png"></a>
	        			Cruz verde  -  3614-5252
	        		</li>
	        		
	        		<li>
	        			<!--<a href="single.html" class="heading">Get more freebies!</a>
	        			visit <a href="http://www.luiszuno.com" >luiszuno.com</a> and get more free items to help you create awesome sites. -->
	        		</li>
	        		
	        		<li>
	        			<a class="heading"><img src="fotos/cfe.png"></a>
	        			CFE
	        		</li>
	        		
	        		<li>
	        			<!--<a href="single.html" class="heading">Themeforest Themes</a>
	        			Visit  <a href="http://themeforest.net/?ref=ansimuz" >themeforest</a> and grab great themes at a great price! -->
	        		</li>
	        		
	        	</ul>
	        	<!-- ENDS text-posts -->
	        	
	        	
	        	<!-- home-gallery -->
	        	<h1 class="home-block-heading">Galeria</h1>
	        	<ul class="home-gallery">
	        		<li><a href="img/dummies/featured-1.jpg" data-rel="prettyPhoto" title="This is the description" class="thumb"><img src="fotos/1.jpg"  width="260" height="200" alt="CUCEI" /></a></li>
	        		<li><a href="img/dummies/featured-2.jpg" data-rel="prettyPhoto" title="This is the description" class="thumb"><img src="fotos/1 (1).jpg" width="260" height="200"  alt="CECEA" /></a></li>
	        		<li><a href="img/dummies/featured-3.jpg" data-rel="prettyPhoto" class="thumb"><img src="fotos/1 (2).jpg" width="260" height="200"  alt="IMSS" /></a></li>
					<li><a href="img/dummies/featured-4.jpg" data-rel="prettyPhoto" class="thumb"><img src="fotos/1 (3).jpg" width="260" height="200"  alt="Alt text" /></a></li>
					<li><a href="img/dummies/featured-4.jpg" data-rel="prettyPhoto" class="thumb"><img src="fotos/1 (4).jpg" width="260" height="200"  alt="Alt text" /></a></li>
					<li><a href="img/dummies/featured-6.jpg" data-rel="prettyPhoto" class="thumb"><img src="fotos/1 (5).jpg" width="260" height="200"  alt="Alt text" /></a></li>	        		
	        	</ul>
	        	<div class="clearfix"></div>	
	        	<!-- ENDS home-gallery -->
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<footer>
			<div class="wrapper">
			
				<ul id="footer-cols">
					
					<li class="first-col">
						
						<div class="widget-block">
							<h4>Recent posts</h4>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span>March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span>March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span>March 12, 2011</span>
								</div>
							</div>
						</div>
					</li>
					
					<li class="second-col">
						
						<div class="widget-block">
							<h4>Creditos</h4>
							<p>Pagina dirigida a todo aquel interesado en conoser la escuela en su estado natural como jamas se a encontrado</p>
							<p>Dudas y sugerencias favor de comunicarse con el maestro ...</p>
						</div>
						
					</li>
					
					<li class="third-col">
						
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>Twitter </h4>
		         			</div>
		         		</div>
		         		
					</li>	
				</ul>				
				<div class="clearfix"></div>
				
				<p><a href="#">  Copyright 2012 </a>  <a href="#">  Webmaster  </a>  <a href="#">  Contacto  </a> <a href="#">  Comentarios </a> <a href="#">  Laboratorio  </a> </p>

			</div>


			
			<div id="to-top"></div>
		</footer>
		
	</body>
	
</html>