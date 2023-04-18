const traerTodosLosUsuarios = ()=> {
  fetch("./api/usuarios.php")
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(err =>console.log(err))
}

// traerTodosLosUsuarios()



const traerUsuarioEspecifico = (indice) => {
  fetch(`./api/usuarios.php?indice=${indice}`)
    .then(res => res.json())
    .then(data => console.log(data))
    .catch()
}

traerUsuarioEspecifico(0)