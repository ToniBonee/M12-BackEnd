

<?php 

session_start();
session_destroy();
header("location:/M12-BackEnd/paginaInicial.php"); 
exit();
 ?>