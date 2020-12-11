<?php
     // $product = new Producto($_POST["nom"],$_POST["codi"],$_POST["Preu"],$_POST["Seccio"]);
     // echo("QUieres Finalizar tu comanda?(S,N) ");
	//  $productos =[];
      // $productos.push(product);
      session_start();  
  echo "usuari:  ".$_SESSION['user']."<br>";
      if($_SESSION['user']!="admin"){

    
          echo "<a href='espaiuser.php'>tornar</a>";
     
        
     }
     
     if($_SESSION['user']=="admin"){
     
         
          echo "<a href='espaiadmin.php'>tornar</a>";
     
        
     }
?>
<h1>Producto Añadido</h1>
<?php
 

 $producte = $_POST["producte"];

 $codi = $_POST["codi"];
   
 $Preu = $_POST["Preu"];

 $Seccio = $_POST["Seccio"];

 $idCom = $_POST["idCom"];



extract($_REQUEST);
$file=fopen($idCom,"a");
fwrite($file, "\n");  

fwrite($file, $producte. "|");

fwrite($file, $codi. "|");

fwrite($file, $Preu. "|");

fwrite($file, $Seccio. "|");

fwrite($file, "---------------------------------------\n");    
                      
?>