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
    .catch(err =>console.log(err))
}

// traerUsuarioEspecifico(0)


const crearUsuario = () => {
  const options = {
    method: "POST",
    body: JSON.stringify(
      {
        nombre: "valeria",
        edad: 25,
        pais: "eeuu"
      }),
    headers: {
      "Content-Type": "application/json"
    }
  }

  fetch("./api/usuarios.php", options)
  .then(res => res.json())
  .then(data => console.log(data))
  .catch(err => console.log(err))
}

crearUsuario()
traerTodosLosUsuarios()
