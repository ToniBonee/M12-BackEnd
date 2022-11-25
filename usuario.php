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

	<main id="main" class="row">
		<section class="col-3">
			<button id="button" class="col-12" ><a href="usuario.php">Informacion</a></button>
			<button id="button" class="col-12" ><a href="paginaUserDirec.php">Dirección</a></button>
			<button id="button" class="col-12" >Pedidos y facturas</button>
			<button id="button" class="col-12" >Estado del envió</button>
			<button id="button" class="col-12" >Lista de deseos</button>
			<button id="button" class="col-12" onclick="alerta()">Desconectar</button>
		</section>

		<section class="col-9" >

			<section id="informacion" class="col-12"  >
				<h3>Tus datos</h3>
				<form action="gestionIndex.php" method="POST" id="dat">
					<?php 
						include("informacion.php");
					?>
					<input id="modificar" type="submit" value="ModificarInfo" name="functionModificarInfo" />
				</form>
			</section>


		</section>
	</main>




	
	<footer class="row" id="footer">
        <section class="col-4">
            <h4>Contactános</h4>
    <ul>
        <li>Calle Monlau</li>
        <li>pcbuilder@gmail.com</li>
        <li>602934485</li>
        <li><a href="AboutUs.php" id="contacto">Quienes somos</a></li>
        <li><a href="AvisoLegal.php" id="contacto">Aviso legal</a></li>
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



