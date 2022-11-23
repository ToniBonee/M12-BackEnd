<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesion</title>
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
                <a id="inicio" href='iniciarUser.php'>Iniciar sesion</a>
            </section>
            <section id="sec2" class="col-2">
            <a id="inicio" href="iniciarUser.php"> Ver Carro</a>
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


    <section id="form" class="row">
        <section class="col-3 hiden"></section>
        <section id="reg" class="col-6 text-center">
           <h1>Iniciar sesión</h1>
        <form  action="gestionIndex.php" method="POST">
        <label for="Email" class="col-4">Email:</label>
        <input type="text" name="Email" id="Email" required/><br>

        <label for="Contraseña" class="col-4" >Contraseña:</label>
        <input type="password" name="Contraseña" id="Contraseña" required/><br>
        
        <br>
        <input id="envio" type="submit" value="Enviar" name="functionRead1"/>
        
        <br><hr id="hrfo"><a href="CrearUser.php">¿No tienes cuenta? Create una aqui</a>
        </form> 
        </section>
        <section class="col-3 hiden"></section>

    </section>
    
    <footer class="row">
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
</body>
</html>