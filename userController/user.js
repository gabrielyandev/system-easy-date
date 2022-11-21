var usuarios = [
  { login: "yan", senha: "1234" },
  { login: "carlos", senha: "1234" },
  { login: "pedro", senha: "1234" },
  { login: "bruno", senha: "1234" },
  { login: "luana", senha: "1234" },
  { login: "natalice", senha: "1234" },
  { login: "danilo", senha: "1234" },
  { login: "admin", senha: "admin" },
];

function Login() {
  var usuario = document.getElementsByName("usuario")[0].value.toLowerCase();
  var senha = document.getElementsByName("senha")[0].value;

  for (var u in usuarios) {
    var us = usuarios[u];
    if (us.login === usuario && us.senha === senha) {
      window.location = "home.html";
      return true;
    }
  }
  alert("Dados incorretos, tente novamente.");
  return false;
}
