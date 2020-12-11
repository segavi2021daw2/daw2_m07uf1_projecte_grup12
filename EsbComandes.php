<?php

  session_start();  

?>

<?php

	//$dirComandes = "/var/www/html/comandes/";
	if($_SESSION['user']=="admin"){
	if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
		$nomFitxer = $_REQUEST["q"];
		echo "<b>Comanda ID:</b> $nomFitxer<br>";
		//$nomCompletFitxer = $dirComandes.$nomFitxer;
	
		if (file_exists($nomFitxer)){
			if (unlink($nomFitxer)){
				include("ok200.php");
			}else include("error403.php");
		}else include("error404.php");
	} else include("error405.php");
} else { echo "No tiene permisos suficientes para realizar esta accion";}
?>
