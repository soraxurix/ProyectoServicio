const buttonRegistro = document.getElementById("button");
var yaTermino = true;
// document.getElementById("pass").value = "prueba1234";
// document.getElementById("email").value = "uricar2@hotmail.com";



buttonRegistro.addEventListener("click", async function(e) {
  console.log(yaTermino);
  if (yaTermino) {
    yaTermino = false;
    const dataSend = {
      "email": document.getElementById("email").value,
      "pass": document.getElementById("pass").value
    }

    const res = await fetch("resources/php/ComprobarInicioSesion.php", {
      method: "POST",
      body: JSON.stringify(dataSend)
    });
    const data = await res.json();
    console.log(data);
    yaTermino = true;
    switch (data) {
      case 200:
        window.location.replace("principal.php");
        break;
      case 201:
        alerta('MessageBad', 'El email no es correcto');
        break;
      case 202:
        alerta('MessageBad', 'La contraseña es incorrecta');
        break;
    }

  }
});
