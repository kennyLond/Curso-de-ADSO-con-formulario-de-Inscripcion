document.addEventListener("DOMContentLoaded", () => {
    const botonLimpiar = document.querySelector(".clean");
    const formulario = document.getElementById("form_adso");

    botonLimpiar.addEventListener("click", () => {
         formulario.reset(); // Limpia todos los campos del formulario
    });
})