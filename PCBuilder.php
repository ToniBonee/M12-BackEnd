<?php
class PCBuilder
{
	//1-properties
	private $server = "localhost";
	private $username = "root";
	private $password = "";

	private $database_name = "pcbuilder";
	private $clientes = "clientes";
	private $connection = "";


	function __construct()
	{
			$Control=$_POST["Control"];
		//1-
		$this -> createDataBase();
		//conectar
		$this ->connectToServerDataBase();
		$this->defineTableFild1();
		$this->createTables($this->clientes);

		if ($Control=="Create") $this -> functionCreate1();
		if ($Control=="Read") $this -> functionRead1();
		if ($Control=="ModificarInfo") $this -> functionModificarInfo();
		if ($Control=="ModificarInfoDirec") $this -> functionModificarDirec();

	}
	private function createDataBase(){
		$query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
		$connectionTemp = mysqli_Connect($this->server , $this->username, $this->password);
		$ok = mysqli_query($connectionTemp,$query);
		mysqli_close($connectionTemp);
	}
	private function connectToServerDataBase(){
		$this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database_name);
		
	}
	private function defineTableFild1(){
		$this -> tableFilds="
		`id_cliente` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(30) NOT NULL,
    `apellido` varchar(30) NOT NULL,
    `DNI` varchar(9) NOT NULL UNIQUE,
    `fecha_nacimiento` date NOT NULL,
    `Email` varchar(30) NOT NULL UNIQUE,
    `Contraseña` varchar(100) NOT NULL,
    `imagen` varchar(30),
    PRIMARY KEY (`id_cliente`)
         ";
	}
	private function createTables($clientes){
      //- Crear una table
        $query = "CREATE TABLE IF NOT EXISTS $this->database_name.$clientes($this->tableFilds) ENGINE = MYISAM";
        $ok = mysqli_query($this->connection,$query);

    }
	
	function functionCreate1()
	{
		
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$DNI = $_POST["DNI"];
		$Email =$_POST["Email"];
		$Contraseña =$_POST["Contraseña"];
		$Rcontraseña =$_POST["Rcontraseña"];
		$fecha_nacimiento = $_POST["fecha_nacimiento"];
		$imagen = "img/Usuario.png";
		$select = mysqli_query($this->connection, "SELECT * FROM $this->database_name.$this->clientes WHERE  `DNI`='$DNI' and `Email`='$Email'");
		$numrows = mysqli_num_rows($select);

		if ($Contraseña == $Rcontraseña) {
			if ($numrows > 0) {
				echo '<script>alert("User alredy exist ")</script>';
				echo '<script>window.location.assign("http://localhost/M12-BackEnd/CrearUser.php");</script>';
		 }else{
		 	$query = "INSERT INTO $this->database_name.$this->clientes (`nombre`, `apellido`,`DNI`,`fecha_nacimiento`,`Email`,`Contraseña`,`imagen`) 
			VALUES ('$nombre', '$apellido','$DNI','$fecha_nacimiento','$Email','$Contraseña','$imagen');";

		$ok = mysqli_query($this->connection, $query);
				if ($ok) {
			echo '<script>alert("Create sucscefully ")</script>';
			echo '<script>window.location.assign("http://localhost/M12-BackEnd/paginaInicial.php");</script>';
			}

			else {
			echo '<script>alert("Create not sucscefully ")</script>';
			echo '<script>window.location.assign("http://localhost/M12-BackEnd/CrearUser.php");</script>';
     }
		 }	
			
		}else{
			echo '<script>alert("Las contraseñas no coinciden ")</script>';
			echo '<script>window.location.assign("http://localhost/M12-BackEnd/CrearUser.php");</script>';
		}
		 

		
	}
	
	function functionRead1()
		{
		$Email = $_POST["Email"];
		$Contraseña =$_POST["Contraseña"];
		$query = mysqli_query($this->connection, "SELECT * FROM $this->database_name.$this->clientes WHERE `Email`='$Email' and `Contraseña`='$Contraseña'");
		$numrows = mysqli_num_rows($query);
		if ($numrows > 0) {
			session_start();
			$_SESSION['login'] = $Email;

			while ($row = $query->fetch_array()) {
						$id_cliente = $row['id_cliente'];
						$imagen = $row['imagen'];
					
				}
					$_SESSION['id'] = $id_cliente;
					$_SESSION['imagen'] = $imagen;
			}
					
		else{
		
			echo '<script>alert("Email o contraseña incorrectos")</script>';
			echo '<script>window.location.assign("http://localhost/M12-BackEnd/iniciarUser.php");</script>';
		} 

		
		}
		function functionModificarInfo(){
						$nombre = $_POST['nombre'];
						$apellido = $_POST['apellido'];
						$DNI = $_POST['DNI'];
						$fecha_nacimiento = $_POST['fecha_nacimiento'];
						$Email = $_POST['Email'];
						$Contraseña = $_POST['Contraseña'];
						$imagen = $_POST['imagen'];

		$update = "UPDATE $this->database_name.$this->clientes SET `nombre`='$nombre',`apellido`='$apellido',`DNI`='$DNI' WHERE `Email`='$Email' ";
		$ok = mysqli_query($this->connection, $update);
		if ($ok) {
			echo '<script>alert("Se han actualizado los datos ")</script>';
			echo '<script>window.location.assign("http://localhost/M12-BackEnd/usuario.php");</script>';
		}

		else {
			echo '<script>alert("No se han podido modificar los datos ")</script>';
			echo '<script>window.location.assign("http://localhost/M12-BackEnd/usuario.php");</script>';
	}
}

function functionModificarDirec(){

						$nombre = ' ';
						$apellido = ' ';
						$Direccion = ' ';
						$Codigo_postal = ' ';
						$Ciudad = ' ';
						$Telefono = ' ';
						$Empresa = ' ';
						session_start();
						$nombre = $_POST['nombre'];
						$apellido = $_POST['apellido'];
						$Direccion = $_POST['Direccion'];
						$Codigo_postal = $_POST['Codigo_postal'];
						$Ciudad = $_POST['Ciudad'];
						$Telefono = $_POST['Telefono'];
						$Empresa = $_POST['Empresa'];
						$id =  $_SESSION['id'];
						$query =mysqli_query($this->connection,"SELECT * FROM datos_envios WHERE `id_cliente`='$id'");
						$numrows = mysqli_num_rows($query);
						if ($numrows > 0) {
						$updateD = "UPDATE datos_envios SET `Direccion`='$Direccion',`Codigo_postal`='$Codigo_postal',`Ciudad`='$Ciudad',`Telefono`='$Telefono',`Empresa`='$Empresa' WHERE `id_cliente`='$id'";
						$ok = mysqli_query($this->connection, $updateD);
						if ($ok) {
						echo '<script>alert("Se han actualizado los datos ")</script>';
						echo '<script>window.location.assign("http://localhost/M12-BackEnd/paginaUserDirec.php");</script>';
					}

					else {
						echo '<script>alert("No se han podido modificar los datos ")</script>';
						echo '<script>window.location.assign("http://localhost/M12-BackEnd/paginaUserDirec.php");</script>';
						}
						}
						else{
								$datos = "INSERT INTO datos_envios (`Direccion`, `Codigo_postal`,`Ciudad`,`Telefono`,`Empresa`,`id_cliente`) 
									VALUES ('$Direccion', '$Codigo_postal','$Ciudad','$Telefono','$Empresa','$id')";
								$ok = mysqli_query($this->connection, $datos);
								if ($ok) {
								echo '<script>alert("Se han actualizado los datos ")</script>';
								echo '<script>window.location.assign("http://localhost/M12-BackEnd/paginaUserDirec.php");</script>';
								}

								else {
								echo '<script>alert("No se han podido modificar los datos ")</script>';
								echo '<script>window.location.assign("http://localhost/M12-BackEnd/paginaUserDirec.php");</script>';
					     }
						}
						
					}

		
}
?>