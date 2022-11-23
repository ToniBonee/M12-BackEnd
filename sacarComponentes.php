<?php
$inc = include("con_file.php");

if ($inc) {
	
	$query = "SELECT * FROM productos  left join categorias  on  categorias.id_categoria = productos.id_categoria WHERE productos.id_categoria = 1";
	$result = mysqli_query($conex,$query);
	
		while ($row = $result->fetch_array()) {
						$producto = $row['producto'];
						$precio = $row['precio'];
						$stock = $row['stock'];
						$imagen_producto = $row['imagen_producto'];
						$info_producto = $row['info_producto'];
						$id_categoria = $row['id_categoria'];
?>		
					<section class="col-4" id="prod">
						<section class="col-12" id="bottProd">
							<img class="col-12" id="imagProd" src='<?php echo $imagen_producto?>'>
							<h3 class="col-12"><?php echo $producto; ?> </h3>
							<h4 class="col-12"><?php echo $precio;?>€ </h4>
							<p class="col-12"><?php echo $info_producto; ?></p>
						</section>
						<section class="col-12" >
							<h4 class="col-12">Stock: <?php echo $stock;?> </h4>
							<button class="col-12">Comprar</button>	
							<button class="col-12">Añadir Al carro</button>	
						</section>
					</section>
					
						
					
				<?php	
					
				}
		
}
	
					
						?>

						
						