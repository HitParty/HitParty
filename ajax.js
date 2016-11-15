function validar() {

    //Creamos variables
  
    var usuario = document.form.usuario.value;
    var clave = document.form.clave.value;
    

    if (usuario == "" || clave == "") {
        alert("Debes completar todos los campos");
    return false;
    } else {
     return true;
    } 
}
     //Fin de la validación