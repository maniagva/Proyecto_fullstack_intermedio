// Obtener elementos del DOM
var showModalBtn = document.getElementById("btn_registro");
var closeModalBtn = document.getElementById("closeModalBtn");
var modal = document.getElementById("myModal");
var registrationForm = document.getElementById("registrationForm");
var modalVisible = false;

function showModal(){
    modal.style.display = "block";
    modalVisible = true;
}

function hideModal(){
    modal.style.display = "none";
    modalVisible = false;
}
showModalBtn.onclick = function() {
    showModal();
}

closeModalBtn.onclick = function() {
    hideModal();
}

window.onclick = function(event) {
    if (modalVisible && event.target == modal) {
        hideModal();
    }
}

// Manejar el envío del formulario de registro
registrationForm.onsubmit = function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    // Obtener los valores del formulario
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Realizar la lógica de registro aquí (por ejemplo, enviar los datos al servidor)

    // Cerrar el modal después del registro
    hideModal();
}

hideModal();