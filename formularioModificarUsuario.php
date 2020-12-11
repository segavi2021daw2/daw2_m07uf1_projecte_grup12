<?php

  session_start();  
  echo "usuari:  ".$_SESSION['user']."<br>";

 
?>

<html> 
<head> 	<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head>
<body>

	<h2>Modificació de dades usuari </h2>
   
	  <form method="POST" action="verificacionModificarUsuario.php">
   
     
   
			Contrasenya: <br />
   
		<input type="password" name="pass" size="50" />
   
		<p>
   
   
		Nom complet <br />
   
		<input type="text" name="nomcomplet" size="50" />
   
		<p>
   
		Adreça postal completa <br />
   
		<input type="text" name="Adreça" size="50" />
   
		 <p>
   
   
			correu electrònic <br />
		   
		<input type="text" name="correu" size="50" />
		   
				 <p>

			telèfon de contacte <br />
		   
					<input type="text" name="tlf" size="50" />	
					
					<p>

			VISA <br />
					   
			<input type="text" name="visa" size="15" />		

			<p>

			Vols borrar el teu compte? en cas de que ho volguis fer escriu: "sol·licito esborrar el meu compte" al camp inferior perque el administrador ho gestioni  <br /><br>
					   
			<input type="text" name="borrar" size="30" />	

		<input type="submit" name="submit" value="modificar les meves Dades" />
		</form>
		<input type="button" value="tornar" onclick="location.href='espaiuser.php'">	
		
	

		

	
	
 
   
  </form>




	