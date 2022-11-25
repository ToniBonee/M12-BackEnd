<!DOCTYPE html>
<html>
<head>
	<title>PCBuilder</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<main class="container-fluid">
	 <header>
        <section class="row">
            <a class="col-2" href="paginaInicial.php" ><img id="logo" src="img/Logo.png" width="190px" height="70px"></a>
            <label for="imput"class="col-5" id="buscar">
                    <input type="text" class="form-control" name="form" placeholder="Buscar">
                    
                </label>
                
            <section id="sec2" class="col-2">
                <?php
            	session_start();
            	if (!isset($_SESSION['login'])) {
            		
            		echo"<a href='iniciarUser.php'>Iniciar sesion</a> ";

            	}else{
				
            		echo("<a href='usuario.php'>"."<button id='sesion'>".$_SESSION['login'])."</button>"."</a>";
					
			        
            	}
            	 
            	?>
            </section>
            <section id="sec2" class="col-2">
            <?php 
            if (!isset($_SESSION['login'])) {
            	echo"<a id='inicio' href='iniciarUser.php'>Ver Carro</a>";
            }else{
            	echo "<a id='inicio' href='usuario.php' >Ver Carro</a>";
            }
            ?>
           
            </section>    
        </section>
        <nav class="row">
            
            <ul id="nav"><a href="componentes.php">Componentes</a></ul>
            <ul id="nav"><a href="ordenadores.php">Ordenador</a></ul>
            <ul id="nav" ><a href="gaming.php">Gaming</a></ul>
            <ul id="nav" ><a href="periféricos.php">Periféricos</a></ul>
            <ul id="nav" >Ofertas</ul>

        </nav>
    </header>

    <main id="main" class="row" >
        <section id="menuBuscar"  class="col-2">
            <section id="param" class="row">
                <button class="col-12" >Borrar filtros</button>
                <div class="rangeslider">
                     <input class="min" name="range_1" type="range" min="0" max="5000" value="0" >
                                <input class="max" name="range_1" type="range" min="0" max="5000" value="5000" />
                                <span class="range_min light left">0 €</span>
                                <span class="range_max light right">5.000 €</span>
                </div>
                <h5 class="col-12">Componentes</h5>
                <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Discos duros</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Targetas Gráficas</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Procesadores</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Targetas Ram</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Refrigeracion líquida</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Fuentes de aliementacion</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Placas base</label>

                <h5 class="col-12">Marcas</h5>
                <input type="text" class="form-control" name="form" placeholder="Buscar...">
                <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Asus</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >AMD</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >INTEL</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Acer</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >MSI</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Kingston</label>
                 <input class="col-1" type="checkbox" name="componentes" value="componentes">
                <label class="col-11" name="componentes" value="componentes" >Lenovo</label>
            </section>
        </section>

        <section id="productos" class="col-10">
            <section class="row">
                <?php 
                        include("sacarComponentes.php");
                    ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="JavaScript.js"></script>
</body>
</html>



