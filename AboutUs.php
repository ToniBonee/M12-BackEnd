<!DOCTYPE html>
<html>
<head>
	<title>PCBuilder</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
	


<main class="container-fluid">
	<header>
		<section class="row">
			 <a class="col-2" href="paginaInicial.php" ><img id="logo" src="img/Logo.png" width="190px" height="70px"></a>
			
			<label for="imput"class="col-5" id="buscar">
                    <input type="text" class="form-control" name="form" placeholder="Buscar">
                    
                </label>
                <img >
            <section id="sec2" class="col-2">
            
            	
            	<?php
            	session_start(); 
            	if (!isset($_SESSION['login'])) {
            		
            		echo"<a href='iniciarUser.php'>Iniciar sesion</a> ";

            	}else{
				
            		echo("<a href='usuario.php'>"."<button id='sesion'>".$_SESSION['login'])."</button>"."</a>";
					
            	}
            	
            	?>
           </a>
        	</section>
            <section id="sec2" class="col-2">
            Ver Carro
        	</section>    
		</section>
		<nav class="row">
            <ul id="nav"><a href="componentes.php">Componentes</a></ul>
            <ul id="nav"><a href="ordenadores.php">Ordenador</a></ul>
            <ul id="nav" ><a href="gaming.php">Gaming</a></ul>
            <ul id="nav" ><a href="periféricos.php">Periféricos</a></ul>
			<ul id="nav">Ofertas</ul>
			
		</nav>
	</header>

	
	<main class="row" id="main">

		<section class="col-1" ></section>
		<h1 class="col-10" id="titulo">Tienda online de ordenadores</h1>
		<section class="col-1" ></section>


		<section class="col-1" ></section>
		<section id="head" class="col-10 text-center">
			<img class="col-2"  src="img/icono.png" >
				PC BUILDER
		</section>
		<section class="col-1" ></section>


		<section class="col-1" ></section>
		<section id="quienes" class="col-10">
			<section class="row">
			
				<img class="col-5" src="img/ordenadores.png">
			
			<section class="col-5">
				
			<h1 >Quienes somos</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mi tortor. Sed placerat turpis at justo lobortis ultrices. Sed in libero eget urna consectetur sodales sed tristique velit. Sed vel neque tempus, tincidunt nisl sit amet, rhoncus enim. Cras tempor lacus id tellus vulputate consequat. Fusce consequat ligula non turpis posuere lobortis. Quisque dictum, purus nec placerat finibus, diam orci sagittis diam, sed condimentum quam felis sit amet urna. Aenean feugiat feugiat lectus, consequat consectetur ipsum vehicula eu. Quisque nec felis lorem. Aenean condimentum pellentesque risus at scelerisque. Ut non lorem arcu. Donec fringilla tempus interdum.
				</p>
			</section>
			</section>
			
		</section>
		<section class="col-1" ></section>


		<section class="col-1" ></section>	
		<section id="donde" class="col-10">
			<section class="row">
				<section class="col-6">
					<h1>Donde estamos</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mi tortor. Sed placerat turpis at justo lobortis ultrices. Sed in libero eget urna consectetur sodales sed tristique velit. Sed vel neque tempus, tincidunt nisl sit amet, rhoncus enim. Cras tempor lacus id tellus vulputate consequat. Fusce consequat ligula non turpis posuere lobortis. Quisque dictum, purus nec placerat finibus, diam orci sagittis diam, sed condimentum quam felis sit amet urna. Aenean feugiat feugiat lectus, consequat consectetur ipsum vehicula eu. Quisque nec felis lorem. Aenean condimentum pellentesque risus at scelerisque. Ut non lorem arcu. Donec fringilla tempus interdum.</p>
				</section>
				<iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11965.625983822947!2d2.1941694000000003!3d41.4304006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1664987541357!5m2!1ses!2ses"
                style="border:10; border-color: black;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>
		</section>
		<section class="col-1" ></section>

		

		



		
		




	</main>
		<main class="row" id="patro">
			<section class="col-1" ></section>
				<section id="patrocinadores" class="col-10">
					<section class="row">
						<section class="col-6">
							<img class="col-4" src="img/patrocinadores/Samsung-logo.png">
							<img class="col-4" src="img/patrocinadores/Acer.png">
							<img class="col-4" src="img/patrocinadores/Asus.png">
							<img class="col-4" src="img/patrocinadores/corsair.png">
							<img class="col-4" src="img/patrocinadores/intel.png">
							<img class="col-4" src="img/patrocinadores/Kingston.png">
							<img class="col-4" src="img/patrocinadores/logitech.png">
							<img class="col-4" src="img/patrocinadores/MSI.png">
							<img class="col-4" src="img/patrocinadores/razer.png">
							
						</section>
						<section class="col-6">
							<h1>Patrocinadores</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mi tortor. Sed placerat turpis at justo lobortis ultrices. Sed in libero eget urna consectetur sodales sed tristique velit. Sed vel neque tempus, tincidunt nisl sit amet, rhoncus enim. Cras tempor lacus id tellus vulputate consequat. Fusce consequat ligula non turpis posuere lobortis. Quisque dictum, purus nec placerat finibus, diam orci sagittis diam, sed condimentum quam felis sit amet urna. Aenean feugiat feugiat lectus, consequat consectetur ipsum vehicula eu. Quisque nec felis lorem. Aenean condimentum pellentesque risus at scelerisque. Ut non lorem arcu. Donec fringilla tempus interdum.</p>
							
					 </section>
				</section>
			
		
		
		
		</section>
		<section class="col-1" ></section>
		</main>
	<footer class="row" id="fon"></footer>	






	<footer class="row" id="footer">
        <section class="col-4">
            <h4>Contactános</h4>
    <ul>
        <li>Calle Monlau</li>
        <li>pcbuilder@gmail.com</li>
        <li>602934485</li>
        <li><a href="AboutUs.php" id="contacto">Quienes somos</a></li>
    </ul>
        </section>
        <section class="col-4">
            <h4>Siguenos</h4>
            <section class="row">
            	<img id="redes" class="col-2" src="img/insta.png">
    			<img id="redes" class="col-2" src="img/facebook.png">
    			<img id="redes" class="col-2" src="img/twiter.png">
    			<img id="redes" class="col-2" src="img/link.png">
            </section>
    	
        </section>
    
</footer>
</main>
<script src="JavaScript.js"></script>
</body>
</html>



