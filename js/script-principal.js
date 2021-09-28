MostrarMensajeBienvenida();



async function MostrarMensajeBienvenida (e){
  const res = await fetch("resources/php/seleccionarClientes.php");
  const data = await res.json();

  alerta("MensajeBienvenida","Bienvenido "+data[0].Nombre);
  // console.log(data);
}
