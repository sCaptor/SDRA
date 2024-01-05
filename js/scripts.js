// Scripts
window.addEventListener('DOMContentLoaded', event => {

  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector('#sidebarToggle');
  if (sidebarToggle) {
      sidebarToggle.addEventListener('click', event => {
          event.preventDefault();
          document.body.classList.toggle('sb-sidenav-toggled');
      });
  }

});

// Establecer el tiempo inicial en segundos (600 segundos = 10 minutos)
var tiempoInicial = 300;
var tiempoRestante = tiempoInicial;

// Función para actualizar el contado  r
function actualizarContador() {
  var minutos = Math.floor(tiempoRestante / 60);
  var segundos = tiempoRestante % 60;

  // Añadir un cero delante de los segundos si es necesario
  segundos = segundos < 10 ? "0" + segundos : segundos;

  // Actualizar el contenido del elemento con id "contador"
  document.getElementById("contador").innerHTML = minutos + ":" + segundos;

  // Reducir el tiempo restante en 1 segundo
  tiempoRestante--;

  // Verificar si el tiempo ha llegado a cero
  if (tiempoRestante < 0) {
      // Llamar a la función de cerrar sesión al llegar a cero
      cerrarSesionAlFinalizar();
  }
}

// Llamar a la función actualizarContador cada segundo (1000 milisegundos)
var intervalo = setInterval(actualizarContador, 1000);

// Función para cerrar la sesión cuando el tiempo llega a cero
function cerrarSesionAlFinalizar() {
  alert("¡La sesion ha expirado!");
  // Redirigir a la página de cierre de sesión o ejecutar lógica de cierre de sesión
  //window.location.href = '../html/login.html';
}
