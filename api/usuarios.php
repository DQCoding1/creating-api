<?php 
                                        // BASIC CONCEPTS
  // SABER TIPO DE PETICION:
  // echo "metodo https : ", $_SERVER["REQUEST_METHOD"], "<br/>";
  



  // PETICIÓN POST:
  // enviar contenido de peticion en formato json :
    // {
    //   "usuario": "diego",
    //   "id": 1
    // }

  // obtener información de peticion post 
  // echo "información POST: ", file_get_contents("php://input");


  // DESERIALIZAR LA RESPUESTA
  // $_POST = json_decode(file_get_contents("php://input"), true);
  // print_r($_POST);
  // echo $_POST["usuario"];
  // echo $_POST["id"];







  // PETICIÓN GET:
  // en la url :
  // ?id=6

    // if(isset($_GET["id"])){
    //   echo "retornar usuario especificado : " , $_GET["id"];
    // } else {
    //   echo "retornar todos los usuarios";
    // }
      




    // PETICIÓN PUT 
    // en la url :
    // ?id=1

    // enviar contenido de peticion en formato json :
      // {
      //   "usuario": "diego",
      //   "id": 999999
      // }    
      
    // $_PUT = json_decode(file_get_contents("php://input"));
    // echo "nueva información : "; print_r($_PUT);
    // echo "usuario a actualizar  : " , $_GET["id"];




    // PETICIÓN DELETE 
    // en la url: 
    // ?id=1

    // echo "usuario a eliminar : " , $_GET["id"];
  
    







                                            // CRUD
  header("Content-Type: application/json");                                            
  include_once("../clases/clase-usuario.php");


  switch($_SERVER["REQUEST_METHOD"]){
    case "POST":
      $_POST = json_decode(file_get_contents("php://input"), true);
      $nuevoUsuario = new Usuario($_POST["nombre"], $_POST["edad"], $_POST["pais"]);
      $nuevoUsuario->crearUsuario();
      echo "usuario creado : ", json_encode($_POST);
      break;

    case "GET":
      if (isset($_GET["indice"])){
        echo Usuario::obtenerUsuario($_GET["indice"]);
      } else {
        echo Usuario::obtenerUsuarios();
      }
      break;
     
      
    case "PUT":
      $_PUT = json_decode(file_get_contents("php://input"), true);
      $usuario = new Usuario($_PUT["nombre"], $_PUT["edad"], $_PUT["pais"]);
      $usuario->actualizarUsuario($_GET["indice"]);
      echo "usuario de indice {$_GET['indice']} actualizado con : ", json_encode($_PUT);
      break;


    case "DELETE":
      Usuario::borrarUsuario($_GET["indice"]);
      echo "usuario {$_GET['indice']} eliminado";
      break;
  }

?>