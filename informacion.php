<?php
$inc = include("con_file.php");

if ($inc) {
	$id =  $_SESSION['id'];
	$query = "SELECT * FROM clientes WHERE `id_cliente` =  $id ";
	$result = mysqli_query($conex,$query);
	
		while ($row = $result->fetch_array()) {
						$id_cliente = $row['id_cliente'];
						$nombre = $row['nombre'];
						$apellido = $row['apellido'];
						$DNI = $row['DNI'];
						$fecha_nacimiento = $row['fecha_nacimiento'];
						$Email = $row['Email'];
						$Contraseña = $row['Contraseña'];
						$imagen = $row['imagen'];
					
				}
}
	
					
						?>

			<label for="nombre" class="col-5">Nombre:</label>
           	<input   type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>"required /><br>

            <label for="apellido" class="col-5">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $apellido; ?>"required /><br>

            <label for="DNI"class="col-5">DNI:</label>
            <input type="text" name="DNI" id="DNI" value="<?php echo $DNI; ?>"required /><br>

            <label for="Email"class="col-5">Email:</label>
            <input type="text" name="Email" id="Email" value="<?php echo $Email; ?>"required /><br>

            <label for="Contraseña"class="col-5">Contraseña:</label>
            <input type="password" name="Contraseña" id="Contraseña" value="<?php echo $Contraseña; ?>"  required/><br>

            <label for="fecha_nacimiento"class="col-5">Fecha de nacimiento:</label>
            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>" required/><br>

            <label for="Imagen" class="col-4">Imagen de perfil:</label>
            <input type="file" name="imagen" id="Imagen" value="<?php echo $imagen; ?>"  /><br>
					
	