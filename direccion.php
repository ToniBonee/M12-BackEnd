<?php
$inc = include("con_file.php");

if ($inc) {

	$id =  $_SESSION['id'];
	$query = "SELECT * FROM clientes  left join datos_envios  on  datos_envios.id_cliente = clientes.id_cliente WHERE clientes.id_cliente = $id";
	$result = mysqli_query($conex,$query);
	$id_datos = ' ';
	$nombre = ' ';
	$apellido = ' ';
	$Direccion = ' ';
	$Codigo_postal = ' ';
	$Ciudad = ' ';
	$Telefono = ' ';
	$Empresa = ' ';

		while ($row = $result->fetch_array()) {
						$id_datos = $row['id_datos'];
						$nombre = $row['nombre'];
						$apellido = $row['apellido'];
						$Direccion = $row['Direccion'];
						$Codigo_postal = $row['Codigo_postal'];
						$Ciudad = $row['Ciudad'];
						$Telefono = $row['Telefono'];
						$Empresa = $row['Empresa'];
				}
	}			
						?>
			<label for="nombre" class="col-5">Nombre:</label>
           	<input   type="text" name="nombre" id="nombre" value="<?php  echo $nombre; ?>"required /><br>

            <label for="apellido" class="col-5">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $apellido; ?>"required /><br>
            			
			<label for="Direccion" class="col-5">Direccion:</label>
           	<input   type="text" name="Direccion" id="Direccion" value="<?php echo $Direccion; ?>" /><br>

            <label for="Codigo_postal" class="col-5">Codigo_postal:</label>
            <input type="text" name="Codigo_postal" id="Codigo_postal" value="<?php echo $Codigo_postal; ?>" /><br>

            <label for="Ciudad"class="col-5">Ciudad:</label>
            <input type="text" name="Ciudad" id="Ciudad" value="<?php echo $Ciudad; ?>" /><br>

            <label for="Telefono"class="col-5">Telefono:</label>
            <input type="text" name="Telefono" id="Telefono" value="<?php echo $Telefono; ?>" /><br>

            <label for="Empresa"class="col-5">Empresa:</label>
            <input type="text" name="Empresa" id="Empresa" value="<?php echo $Empresa; ?>"  /><br>

            
					
	