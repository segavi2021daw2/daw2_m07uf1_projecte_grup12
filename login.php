<?php
  session_start();  

?>

 <h1>Accés usuari </h1>




<?php

 // recupera los datos del envío POST

 $user = $_POST["user"];

 $pass = $_POST["pass"];





 
 $_SESSION['user']=$user;


 echo $_SESSION['user']."<br>";

 define("ARCHIVO_USUARIOS", "usuarios.txt");

 // Mostramos contenido del archivo
 
 $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
       
 $encontrado=false;

 while ($linea = fgets($archivo))
 {
   $partes = explode('|', trim($linea));
         
   if (($user == $partes[0]) && ($pass == $partes[1]))
   {
     $encontrado=true;
     break;
   }
 }
 
 if ($encontrado==true && $_SESSION['user']=="admin"){

    echo "Apartat Administrador";
  
    header('Location: '."espaiadmin.php");

}else if($encontrado==true && $_SESSION['user']!="admin"){ 

    echo '  Has sigut validat correctament amb l´usuari i contrasenya indicats.'."<br>";
 
    header('Location: '."espaiuser.php");
    echo "Les teves dades personales son: ".$linea;
 } else {
    echo "   l´usuari o el password introduït son incorrectes ";
    
 }
  
 fclose($archivo);
 
 ?>


<br><br><br>
<input type="button" value="tornar" onclick="location.href='registroulogin.php'">

<br> 



