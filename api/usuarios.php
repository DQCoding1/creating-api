<?php 
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
    
?>