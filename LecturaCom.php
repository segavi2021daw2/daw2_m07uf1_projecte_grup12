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
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Petició de lectura de comanda</title>
	</head>
	<body>
		<fieldset>
			<legend>
				<h1>Petició de lectura de comanda</h1>
			</legend>		
			<form method="POST" action="abrircomanda.php">
				<table>
					<tr>
						<td>Identificador de comanda:</td>
						<td><input type="text" name="nomCom" id="nomCom" size="20"></td>
					</tr>
                </table>
                
                
                 <input type="submit" name="submit" id="abrircomanda" value="abrir Comanda" >



            </form>

		</fieldset>
	
	</body>
</html>

