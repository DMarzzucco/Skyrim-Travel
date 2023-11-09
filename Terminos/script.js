//Registro
document.addEventListener("DOMContentLoaded", function() {
    var registroLink = document.getElementById("registro-link");

    registroLink.addEventListener("click", function(event) {
        event.preventDefault();
        alert("Te has registrado con éxito. Verifica tu correo electrónico");
        window.location.href ="/index.html";
    });
});;

//Reserva
document.addEventListener("DOMContentLoaded", function() {
    // Obtén una referencia al elemento de enlace de reserva
    var reservaLink = document.getElementById("reserva-link");

    // Agrega un evento clic al enlace
    reservaLink.addEventListener("click", function(event) {
        // Previene el comportamiento predeterminado del enlace
        event.preventDefault();

        // Muestra una alerta cuando se hace clic en el enlace
        alert("¡Habitación reservada con éxito!");
    });
});