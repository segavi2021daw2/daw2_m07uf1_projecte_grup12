<?php
class UsoFicheroUsuario{
    private $direccion= "../Comandas/" ;

    public function __construct(){

        }
    public function BorrarUsuario($nomUsuari){
        if($archivo=fopen($direccion."peticionBorrar.txt","w")){
            fwrite($archivo,"Peticion de borrar cuenta.");
            fwrite($archivo,"Nombre usuario: ".$nomUsuari);
            fwrite($archivo,"----------------------------");
            fclose($archivo);
        }else{
            $archivo=fopen($direccion."peticionBorrar.txt","x");
            fwrite($archivo,"Peticion de borrar cuenta.");
            fwrite($archivo,"Nombre usuario: ".$nomUsuari);
            fwrite($archivo,"----------------------------");
            fclose($archivo);
        }
        
    
    }


}
class UsoFicheroAdministrador{
    private $direccion= "../Comandas/" ;

    public function __construct(){

        }

    public function Añadir comanda($nomUsuari){
        $archivo=fopen($direccion."usuarios.txt","w");
        fwrite($archivo," ");
        fclose($archivo);

    }


}
?>