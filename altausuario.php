<?php
  session_start();  

?>


 <h1>l 'Usuari s' ha enregistrat correctament al sistema </h1>


 





<?php


class Usuari{
  private $visa;
  private $user;
  private $pass;
  private $nomcomplet;
  private $Adreça;
  private $correu;
  private $tlf;

  public function __construct($pass,$user,$visa,$nomcomplet,$Adreça,$correu,$tlf){
          $this->user=$user;
          $this->visa=$visa;
          $this->pass=$pass;
          $this->nomcomplet=$nomcomplet;
          $this->Adreça=$Adreça;
          $this->correu=$correu;
          $this->tlf=$tlf;
      }

      public function getNom(){
        return $this->user;
      }
      public function getPass(){
        return $this->pass;
      }
      public function getVisa(){
        return $this->visa;
      }
      public function getNomC(){
        return $this->nomcomplet;
      }
      public function getAdreça(){
        return $this->Adreça;
      }
      public function getCorreu(){
        return $this->correu;
      }
      public function getTlf(){
        return $this->tlf;
      }

}

 // recupera los datos del envío POST
 

 $user = $_POST["user"];

 $pass = $_POST["pass"];
   
 $nomcomplet = $_POST["nomcomplet"];

 $Adreça = $_POST["Adreça"];

 $correu = $_POST["correu"];

 $tlf = $_POST["tlf"];

 $visa = $_POST["visa"];

   
 $usuari = new Usuari($pass,$user,$visa,$nomcomplet,$Adreça,$correu,$tlf);
 // valida los datos enviados

 // verificamos datos

 


   
 
  if(empty ($usuari->getNom())){
  die ('ERROR: Si us plau proporcioni el seu user.');
}

  if(empty ($usuari->getPass())){
    die ('ERROR: Si us plau proporcioni la seva password.');
    }

    if(empty ($usuari->getNomC())){
        die ('ERROR: Si us plau proporcioni el seu nom complet.');
        }

        if(empty ($usuari->getAdreça())){
            die ('ERROR: Si us plau proporcioni la seva Adreça.');
            }

            if(empty ($usuari->getCorreu())){
                die ('ERROR: Si us plau proporcioni el seu correu.');
                }

                if(empty ($usuari->getTlf())){
                    die ('ERROR: Si us plau proporcioni el seu tlf.');
                    }

                    if(empty ($usuari->getTlf())){
                        die ('ERROR: Si us plau proporcioni la seva visa.');
                        }
	
                    


extract($_REQUEST);
$file=fopen("usuarios.txt","a");
fwrite($file, "\n");  

fwrite($file, $usuari->getNom(). "|");

fwrite($file, $usuari->getPass(). "|");

fwrite($file, $usuari->getNomC(). "|");

fwrite($file, $usuari->getAdreça(). "|");

fwrite($file, $usuari->getCorreu(). "|");

fwrite($file, $usuari->getTlf(). "|");

fwrite($file, $usuari->getVisa(). "|");
fwrite($file, "---------------------------------------\n");    
                      
?>
 