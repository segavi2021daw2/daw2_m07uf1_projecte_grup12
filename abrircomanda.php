<?php

  session_start();  
  echo "usuari:  ".$_SESSION['user']."<br>";

  if($_SESSION['user']!="admin"){

    
    echo "<a href='LecturaCom.php'>tornar</a>";
  
     
  }
  
  if($_SESSION['user']=="admin"){
  
      
    echo "<a href='LecturaCom.php'>tornar</a>";
  
     
  }
 
?>

<?php
 
 if(isset($_POST['submit']))

 {
    $Nomcomand = $_POST["nomCom"];

    $archivo = fopen($Nomcomand, "r") or die("Error - No fue posible abrir el archivo");

    $encontrado=false;
    while ($linea = fgets($archivo))
    {
      $partes = explode('|', trim($linea));
      echo ($linea);
    }
 
    
 fclose($archivo);

 }
 
 ?>