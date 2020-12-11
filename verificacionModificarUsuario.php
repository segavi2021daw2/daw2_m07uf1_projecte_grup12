<?php
  session_start();  

?>


 <h1>l 'Usuari ha modificat correctament les seves dades  al sistema </h1>
 
<?php

 // recupera los datos del envío POST
 

$user= $_SESSION['user'];
 $pass = $_POST["pass"];
   
 $nomcomplet = $_POST["nomcomplet"];

 $Adreça = $_POST["Adreça"];
 
 $correu = $_POST["correu"];

 $tlf = $_POST["tlf"];

 $visa = $_POST["visa"];

$borrar= $_POST["borrar"];


 // verificamos datos

 


   
  
 

  if(empty ($pass)){
    die ('ERROR: Si us plau proporcioni la seva password.');
    }

    if(empty ($nomcomplet)){
        die ('ERROR: Si us plau proporcioni el seu nom complet.');
        }

        if(empty ($Adreça)){
            die ('ERROR: Si us plau proporcioni la seva Adreça.');
            }

            if(empty ($correu)){
                die ('ERROR: Si us plau proporcioni el seu correu.');
                }

                if(empty ($tlf)){
                    die ('ERROR: Si us plau proporcioni el seu tlf.');
                    }

                    if(empty ($visa)){
                        die ('ERROR: Si us plau proporcioni la seva visa.');
                        }
	
                    

                        $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
       
                        $encontrado=false;
                       
                        while ($linea = fgets($archivo))
                        {
                          $partes = explode('|', trim($linea));
                                
                         
                         
                          extract($_REQUEST);

                          $file=fopen("usuarios.txt","a+");
                            
                          if ($partes[0] == ($_SESSION['user'])){

                          fwrite($file, $user. "|");
                          
                          fwrite($file, $pass. "|");
                          
                          fwrite($file, $nomcomplet. "|");
                          
                          fwrite($file, $Adreça. "|");
                          
                          fwrite($file, $correu. "|");
                          
                          fwrite($file, $tlf. "|");
                          
                          fwrite($file, $visa. "|");
                          fwrite($file, $borrar. "|");    
                          header('Location: '."espaiuser.php");     
                          {
                            $encontrado=true;
                            break;
                          }
                        }
                      }
?>
 
