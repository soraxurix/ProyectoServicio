// Iniciamos las variables globales
const tituloText = document.getElementById("titulo-perfil");
const loadingSpinner = document.getElementById("loaderPrincipal");

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