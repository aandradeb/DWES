document.getElementById("formulario").addEventListener('submit', () => {
  const f_email = document.getElementById("f_email").value;
  const f_password = document.getElementById("f_password").value;

  if (f_email.length == 0 || f_password.length == 0) {
    alert("Campo o campos vacios, porfavor rellenalos");
  }
});