<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
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
       


    <section class="row" id="form">
        <form  action="gestionIndex.php" method="POST" id="dat">
            <h1 class="col-12">Crear Cuenta</h1>
            <label for="nombre" class="col-5">Nombre:</label>
            <input   type="text" name="nombre" id="nombre" placeholder="Nombre"required /><br>

            <label for="apellido" class="col-5">Apellido:</label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido"required /><br>

            <label for="DNI"class="col-5">DNI:</label>
            <input type="text" name="DNI" id="DNI" placeholder="DNI"required /><br>

            <label for="Email"class="col-5">Email:</label>
            <input type="text" name="Email" id="Email" placeholder="Email"required /><br>

            <label for="Contraseña"class="col-5">Contraseña:</label>
            <input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña"  required/><br>

            <label for="Rcontraseña"class="col-5">Repetir contraseña:</label>
            <input type="password" name="Rcontraseña" id="Rcontraseña" placeholder="Repetir contraseña"required /><br>

            <label for="fecha_nacimiento"class="col-5">Fecha de nacimiento:</label>
            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="DD/MM/YYYY" required/><br>

            <input id="envio" type="submit" value="Crear Cuenta" name="functionCreate1" />
    </form>
    </section>
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

</body>
</html>