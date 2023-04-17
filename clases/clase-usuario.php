<?php
  class Usuario{
    private $nombre;
    private $edad;
    private $pais;

    public function __contruct($nombre, $edad, $pais){
      $this->nombre = $nombre;
      $this->edad = $edad;
      $this->pais = $pais;
    }
  }  
?>