document.getElementById("formulario").addEventListener('submit', () => {
  const user_email = document.getElementById("user_email").value;
  const user_password = document.getElementById("user_password").value;

  if (user_email.length == 0 || user_password.length == 0) {
    alert("Campo o campos vacios, porfavor rellenalos");
  }
});