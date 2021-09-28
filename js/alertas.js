// Alertas

function alerta(accion, msg) {
  switch (accion) {
    case "MessageOK":
      Swal.fire({
        title: '<p class="alerta-ok">' + msg,

        icon: "success",
        background: '#B6EBCB',
        iconColor: '#09A45B',
        showConfirmButton: false,
        position: 'bottom',
        toast: true,
        showClass: {
          popup: 'animate__animated animate__fadeInLeftBig'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutRightBig'
        }
      });
      break;
    case "MessageBad":
      Swal.fire({
        title: '<p class="alerta-bad">' + msg,

        icon: "error",
        background: '#F2ADA8',
        iconColor: '#F24536',
        showConfirmButton: false,
        position: 'bottom',
        toast: true,
        showClass: {
          popup: 'animate__animated animate__fadeInLeftBig'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutRightBig'
        }
      });
      break;
    case "MensajeBienvenida":
      Swal.fire({
        title: '<p class="alerta-ok">' + msg,

        icon: "success",
        background: '#B6EBCB',
        iconColor: '#09A45B',
        showConfirmButton: false,
        position: 'center',
        toast: true,
        showClass: {
          popup: 'animate__animated animate__fadeInLeftBig'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutRightBig'
        }
      });
      break;
  }
}
