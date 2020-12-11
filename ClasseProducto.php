<?php
    abstract class Producto{
        private $nom;
        private $codi;
        private $precio;
        private $seccion;

        public function __toString() {
            return "Producto, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion";
        }

    }

    class PlacaBase implements Producto{
        private $numEntradas;
        
        public function __construct($nom,$codi,$precio,$seccion,$numEntradas){
            $this->nom=$nom;
            $this->codi=$codi;
            $this->precio=$precio;
            $this->seccion=$seccion;
            $this->numEntradas=$numEntradas;
        }

        public function __toString() {
            return "Placa Base, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, Entradas= $this->numEntradas";
        }

    }

    class Teclado implements Producto{
        private $idioma;

        public function __construct($nom,$codi,$precio,$seccion,$idioma){
            $this->nom=$nom;
            $this->codi=$codi;
            $this->precio=$precio;
            $this->seccion=$seccion;
            $this->idioma=$idioma;
        }

        public function __toString() {
            return "Teclado, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, idioma= $this->idioma";
        }

    }

    class Raton implements Producto{
        private $wireless;

        public function __construct($nom,$codi,$precio,$seccion,$wireless){
            $this->nom=$nom;
            $this->codi=$codi;
            $this->precio=$precio;
            $this->seccion=$seccion;
            $this->wireless=$wireless;
        }

        public function __toString() {
            return "Raton, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, wireless= $this->wireless";
        }

    }

    class Pantalla implements Producto{
        private $android;

        public function __construct($nom,$codi,$precio,$seccion,$android){
            $this->nom=$nom;
            $this->codi=$codi;
            $this->precio=$precio;
            $this->seccion=$seccion;
            $this->android=$android;
        }

        public function __toString() {
            return "Pantalla, nombre: $this->nom, codigo: $this->codi, precio: $this->precio, seccion= $this->seccion, android= $this->android";
        }
    }


?>