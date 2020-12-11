
<h1>Añadido Producto</h1>
<?php
 
 abstract class Producto{
  protected $nom;
  protected $codi;
  protected $precio;
  protected $seccion;

  public function __toString() {
      return "Producto, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion";
  }

}

class PlacaBase extends Producto{
  private $numEntradas;
  
  public function __construct($nom,$codi,$precio,$seccion,$numEntradas){
      $this->nom=$nom;
      $this->codi=$codi;
      $this->precio=$precio;
      $this->seccion=$seccion;
      $this->numEntradas=$numEntradas;
  }

  //getters globales
public function getNom(){
      return $this->nom;
    }
  public function getCodi(){
      return $this->codi;
    }
  public function getPrecio(){
      return $this->precio;
    }
  public function getSeccion(){
      return $this->seccion;
    }

    public function getNumEnt(){
      return $this->numEntradas;
    }

  public function __toString() {
      return "Placa Base, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, Entradas= $this->numEntradas";
  }

}

class Teclado extends Producto{
  private $idioma;

  public function __construct($nom,$codi,$precio,$seccion,$idioma){
      $this->nom=$nom;
      $this->codi=$codi;
      $this->precio=$precio;
      $this->seccion=$seccion;
      $this->idioma=$idioma;
  }
  //getters globales
public function getNom(){
      return $this->nom;
    }
  public function getCodi(){
      return $this->codi;
    }
  public function getPrecio(){
      return $this->precio;
    }
  public function getSeccion(){
      return $this->seccion;
    }

    public function getIdioma(){
      return $this->idioma;
    }

  public function __toString() {
      return "Teclado, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, idioma= $this->idioma";
  }

}

class Raton extends Producto{
  private $wireless;

  public function __construct($nom,$codi,$precio,$seccion,$wireless){
      $this->nom=$nom;
      $this->codi=$codi;
      $this->precio=$precio;
      $this->seccion=$seccion;
      $this->wireless=$wireless;
  }

  //getters globales
public function getNom(){
      return $this->nom;
    }
  public function getCodi(){
      return $this->codi;
    }
  public function getPrecio(){
      return $this->precio;
    }
  public function getSeccion(){
      return $this->seccion;
    }
    public function getWireless(){
      return $this->wireless;
    }

  public function __toString() {
      return "Raton, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, wireless= $this->wireless";
  }

}

class Pantalla extends Producto{
  private $android;

  public function __construct($nom,$codi,$precio,$seccion,$android){
      $this->nom=$nom;
      $this->codi=$codi;
      $this->precio=$precio;
      $this->seccion=$seccion;
      $this->android=$android;
  }

  //getters globales
public function getNom(){
      return $this->nom;
    }
  public function getCodi(){
      return $this->codi;
    }
  public function getPrecio(){
      return $this->precio;
    }
  public function getSeccion(){
      return $this->seccion;
    }
    public function getAndroid(){
      return $this->android;
    }

  public function __toString() {
      return "Pantalla, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, android= $this->android";
  }
}



 $nom = $_POST["producte"];

 $codi = $_POST["codi"];
   
 $Preu = $_POST["Preu"];

 $Seccio = $_POST["Seccio"];

 $idCom = $_POST["idCom"];

 $producto = new PlacaBase($nom,$codi,$Preu,$Seccio,5);





extract($_REQUEST);
$file=fopen($idCom,"a");
fwrite($file, "\n");  

fwrite($file, $producto->getNom(). "|");

fwrite($file, $producto->getCodi(). "|");

fwrite($file, $producto->getPrecio(). "|");
fwrite($file, $producto->getSeccion(). "|");



fwrite($file, "---------------------------------------\n");    
fclose($file);                    
?>