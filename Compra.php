<?php

  session_start();  
  echo "usuari:  ".$_SESSION['user']."<br>";

  if($_SESSION['user']!="admin"){

    
	echo "<a href='espaiuser.php'>tornar</a>";

   
}

if($_SESSION['user']=="admin"){

    
	echo "<a href='espaiadmin.php'>tornar</a>";

   
}
 
?>
<html> 
<head> 	<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head>
<body>

	<h2>Afegir productes</h2>
   
	  <form method="POST" action="CrearComandes.php">
   
		Nom d'producte: <br />
   
		<input type="text" name="producte" size="50" />
   
		<p>
   
			codi: <br />
   
		<input type="text" name="codi" size="50" />
   
		<p>
   
   
		Preu <br />
   
		<input type="text" name="Preu" size="50" />
   
		<p>
   
		Seccio <br />
   
		<input type="text" name="Seccio" size="50" />

		<p>
   
		Identificador Comanda <br />

		<input type="text" name="idCom" size="50" />
   
		 
		<input type="submit" name="añadir" value="añadir" />			
	  </form>
   

	  
	  

	  
	</body>
	</html>
