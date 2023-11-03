// Obtener elementos del DOM
var showModalBtn = document.getElementById("btn_registro");
var closeModalBtn = document.getElementById("closeModalBtn");
var modal = document.getElementById("myModal");
var registrationForm = document.getElementById("registrationForm");
var modalVisible = false;

// Modal de login
var openModalButton = document.getElementById('btn_ingreso');
var closeModalButton = document.getElementById('close-modal-login');
var loginModal = document.getElementById('login-modal');

window.onload = function() {
    loginModal.style.display = 'none';
};
// Funciones para mostrar y ocultar el modal
function showModal() {
    modal.style.display = "block";
    modalVisible = true;
}

function hideModal() {
    modal.style.display = "none";
    modalVisible = false;
}

showModalBtn.onclick = showModal;
closeModalBtn.onclick = hideModal;

window.onclick = function (event) {
    if (modalVisible && event.target == modal) {
        hideModal();
    }
}

// Formulario de registro
// registrationForm.onsubmit = function (event) {
//     event.preventDefault();

//     // Obtener los valores del formulario
//     var nombre = document.getElementById("nombre").value;
//     var apellido = document.getElementById("apellido").value;
//     var identificacion = document.getElementById('identificacion').value;
//     var email = document.getElementById("email").value;
//     var password = document.getElementById("password").value;

//     hideModal();
// }

// Eventos para abrir y cerrar el modal de login
openModalButton.addEventListener('click', function () {
    loginModal.style.display = 'block';
});

closeModalButton.addEventListener('click', function () {
    loginModal.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target == loginModal) {
        loginModal.style.display = 'none';
    }
});

// Ocultar el modal al inicio
hideModal();