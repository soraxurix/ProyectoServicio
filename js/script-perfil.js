// Iniciamos las variables globales
const tituloText = document.getElementById("titulo-perfil");
const loadingSpinner = document.getElementById("loaderPrincipal");
const buttonActualizar = document.getElementById("buttonActualizar");

// Iniciamos la función quen os permitirá llenar los imputs
AñadirValores();

async function AñadirValores (e){
  // Realizamos consulta para obtener la información
  const res = await fetch("resources/php/seleccionarClientes.php");
  const data = await res.json();
  // Mandamos el valor del nombre al título del formulario
  tituloText.innerHTML = 'Bienvenido <strong>'+data[0].Nombre+'</strong>';

  //Añadimos los datos de los inputs
  await agregarvalores(data);
  // Paramos el loader una vez se termine el proceso
  loadingSpinner.classList.add('hidden');
}

// Función para añadir los valores de la base de datos al input
function agregarvalores (DATA) {
	// Agregamos el valor sacadi de la base de datos
	document.getElementById("input-nombre").value = DATA[0].Nombre;
	document.getElementById("input-apellido").value = DATA[0].Apellido;
	document.getElementById("input-email").value = DATA[0].Email;
	document.getElementById("input-telefono").value = DATA[0].Telefono;
	document.getElementById("input-pass").value = DATA[0].Pass;
	// Agreganos la clase activo para que el input se vea correctamente
	document.getElementById("input-nombre").classList.add('active');
	document.getElementById("input-apellido").classList.add('active');
	document.getElementById("input-email").classList.add('active');
	document.getElementById("input-telefono").classList.add('active');
	document.getElementById("input-pass").classList.add('active');
	// Indicamos que el imput del nombre estará seleccionado al iniciar
	document.getElementById("input-nombre").focus();
}


buttonActualizar.addEventListener("click", async function (e) {
	const dataSend = {
		"nombre": document.getElementById("input-nombre").value,
		"apellido": document.getElementById("input-apellido").value,
		"email": document.getElementById("input-email").value,
		"telef": document.getElementById("input-telefono").value,
		"pass": document.getElementById("input-pass").value
	}
	const res = await fetch("resources/php/usuario-actualizar.php",{
		method: "POST",
		body: JSON.stringify(dataSend)
	});
	const data = await res.json();
	console.log(data);
	switch (data) {
        case 200:
        await alerta("MessageOK", "La información ha sido actualizado");
        AñadirValores();
        break;
        case 201:
        alerta('MessageBad', 'El email ingresado ya existe');
        break;
        case 202:
        alerta('MessageBad', 'Ocurrió un error');
        break;
      }
	// if (yaTermino) {
 //      yaTermino = false;
 //      const dataSend = {
 //        "nombre": nombre,
 //        "apellido": apellido,
 //        "telef": telefono,
 //        "email": email,
 //        "pass": pass
 //      }
 //      console.log(dataSend);
 //      const res = await fetch("resources/php/RegistrarUsuario.php", {
 //        method: "POST",
 //        body: JSON.stringify(dataSend)
 //      });
 //      const data = await res.json();
 //      console.log(data);
 //      yaTermino = true;
 //    }
});