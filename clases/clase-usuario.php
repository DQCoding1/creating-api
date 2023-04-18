<?php
  class Usuario{
    private $nombre;
    private $edad;
    private $pais;

    public function __construct($nombre, $edad, $pais){
      $this->nombre = $nombre;
      $this->edad = $edad;
      $this->pais = $pais;
    }

    public function crearUsuario (){
      $contenidoArchivo = file_get_contents("../data/usuarios.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $usuarios[] = array(
        "nombre" => $this->nombre,
        "edad" => $this->edad,
        "pais" => $this->pais
      );
      $archivo = fopen("../data/usuarios.json", "w");
      fwrite($archivo, json_encode($usuarios));
      fclose($archivo); 
    }


    public static function obtenerUsuarios(){
      $contenidoArchivo = file_get_contents("../data/usuarios.json");
      return $contenidoArchivo;
    }


    public static function obtenerUsuario($indice){
      $contenidoArchivo = json_decode(file_get_contents("../data/usuarios.json"), true);
      return json_encode($contenidoArchivo[$indice]);
    }


    public function actualizarUsuario($indice){
      $contenidoArchivo = file_get_contents("../data/usuarios.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $usuarios[$indice] = array(
        "nombre" => $this->nombre, 
        "edad" => $this->edad, 
        "pais" => $this->pais 
      );
      $archivo = fopen("../data/usuarios.json", "w");
      fwrite($archivo, json_encode($usuarios));
      fclose($archivo);
    }


    public static function borrarUsuario($indice){
      $contenidoArchivo = file_get_contents("../data/usuarios.json");
      $usuarios = json_decode($contenidoArchivo);
      array_splice($usuarios, $indice, 1);
      $archivo = fopen("../data/usuarios.json", "w");
      fwrite($archivo, json_encode($usuarios));
      fclose($archivo);
    }
  }  
?>