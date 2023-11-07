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
   alert ("La contraseña no puede contener espacios en blanco");
   return false;
  }
   
  if (p1.length == 0 || p2.length == 0) {
   alert("Los campos de la contraseña no pueden quedar vacios");
   return false;
  }
  
  if (p1.length < 8) {
    alert("La contraseña debe tener al menos 8 caracteres");
    return false;
  }
  
  if (p1 != p2) {
   alert("Las contraseñas no coinciden");
   return false;
  } else {

   return true; 
  }
 }