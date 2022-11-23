
<?php
	require_once("PCBuilder.php");


	if(isset($_POST['functionCreate1'])) $_POST["Control"]="Create";
	if(isset($_POST['functionModificarInfo'])) $_POST["Control"]="ModificarInfo";
	if(isset($_POST['functionRead1'])) $_POST["Control"]="Read";
	if(isset($_POST['functionModificarDirec'])) $_POST["Control"]="ModificarInfoDirec";

	$db = new PCBuilder();
	echo '<script>window.location.assign("http://localhost/M12-BackEnd/paginaInicial.php");</script>';
?>


