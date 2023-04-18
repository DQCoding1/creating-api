const traerTodosLosUsuarios = ()=> {
  fetch("./api/usuarios.php")
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(err =>console.log(err))
}

traerTodosLosUsuarios()