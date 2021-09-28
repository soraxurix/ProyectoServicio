const buttonRegistrar = document.getElementById("button");
var yaTermino = true;


buttonRegistrar.addEventListener('click', async function(e) {
  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value ;
  var telefono = document.getElementById("telef").value;
  var pass = document.getElementById("pass").value;
  var email = document.getElementById("email").value;

  if(nombre != '' && apellido != '' && telefono != '' && pass != '' && email != ''){
    if (yaTermino) {
      yaTermino = false;
      const dataSend = {
        "nombre": nombre,
        "apellido": apellido,
        "telef": telefono,
        "email": email,
        "pass": pass
      }
      console.log(dataSend);
      const res = await fetch("resources/php/RegistrarUsuario.php", {
        method: "POST",
        body: JSON.stringify(dataSend)
      });
      const data = await res.json();
      console.log(data);

      switch (data) {
        case 200:
        // await alerta("MessageOK", "Se creó exitosamente");
        window.location.replace("principal.php");
        break;
        case 201:
        alerta('MessageBad', 'El email ingresado ya existe');
        break;
        case 202:
        alerta('MessageBad', 'Ocurrió un error');
        break;
      }
      yaTermino = true;
    }
  }else{
    alerta("MessageBad", "Los campos deben estar llenos");
  }
});
