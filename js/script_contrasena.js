function validarPassword () {
   
  var p1 = document.getElementById("password").value;
  var p2 = document.getElementById("password_confirm").value;
  var espacios = false;
  var cont = 0;

	while (!espacios && (cont < p1.length)) {
		if (p1.charAt(cont) == " ")
			espacios = true;
		cont++;
	}
   
  if (espacios) {
   Swal.fire("¡La contraseña no puede contener espacios en blanco!", "", "warning");
   return false;
  }
   
  if (p1.length == 0 || p2.length == 0) {
   Swal.fire("¡Los campos de la contraseña no pueden quedar vacios!", "", "warning");
   return false;
  }
  
  if (p1.length < 8) {
    Swal.fire("¡La contraseña debe tener al menos 8 caracteres!", "", "warning");
    return false;
  }
  
  if (p1 != p2) {
    Swal.fire("¡Las contraseñas no coinciden!", "", "warning");
   return false;
  } else {

   return true; 
  }
 }