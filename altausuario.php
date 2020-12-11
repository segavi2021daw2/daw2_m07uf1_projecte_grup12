<?php
  session_start();  

?>


 <h1>l 'Usuari s' ha enregistrat correctament al sistema </h1>
 <input type="button" value="tornar" onclick="location.href='registroulogin.php'">	
<?php

 // recupera los datos del envío POST
 

 $user = $_POST["user"];

 $pass = $_POST["pass"];
   
 $nomcomplet = $_POST["nomcomplet"];

 $Adreça = $_POST["Adreça"];

 $correu = $_POST["correu"];

 $tlf = $_POST["tlf"];

 $visa = $_POST["visa"];

   

 // valida los datos enviados

 // verificamos datos

 


   
  
  if(empty ($user)){
  die ('ERROR: Si us plau proporcioni el seu user.');
}

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
	
                    


extract($_REQUEST);
$file=fopen("usuarios.txt","a");
fwrite($file, "\n");  

fwrite($file, $user. "|");

fwrite($file, $pass. "|");

fwrite($file, $nomcomplet. "|");

fwrite($file, $Adreça. "|");

fwrite($file, $correu. "|");

fwrite($file, $tlf. "|");

fwrite($file, $visa. "|");
fwrite($file, "---------------------------------------\n");    
                      
?>
 