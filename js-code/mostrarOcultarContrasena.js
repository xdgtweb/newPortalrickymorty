function mostrarContrasena() {
  var contrasenaInput = document.getElementById("contrasena");
  var iconoOjo = document.querySelector(".ojo");

  if (contrasenaInput.type === "password") {
    contrasenaInput.type = "text";
    iconoOjo.textContent = "👀";
  } else {
    contrasenaInput.type = "password";
    iconoOjo.textContent = "👁️";
  }
}