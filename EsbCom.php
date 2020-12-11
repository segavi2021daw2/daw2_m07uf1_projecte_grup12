<?php

  session_start();  

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Anul·lació de comanda (mètode DELETE amb AJAX)</title>
		<script language="javascript" src="EsbCom.js"></script>
	</head>
	<body>
		<fieldset>
			<legend>
				<h1>Petició d'anul·lació de comanda</h1>
			</legend>		
			<form id="frmEsbCom">
				<table>
					<tr>
						<td>Identificador de comanda:</td>
						<td><input type="text" name="nomCom" id="nomCom" size="20"></td>
					</tr>
				</table>
				<input type="button" name="bEsbCom" id="bEsbCom" value="Esborra Comanda" onclick="esbComanda();">
				<input type="button" name="bNet" id="bNet" value="Neteja formulari" onclick="netForm();">
			</form>
		</fieldset>
		<fieldset>
			<legend>
				<h1>Resposta a la petició</h1>
			</legend>
			<p id="resp"></p>
		</fieldset>		
		
	</body>
</html>

  
?>
