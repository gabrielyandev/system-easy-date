// Função para formatar 1 em 01
const zeroFill = (n) => {
  return ("0" + n).slice(-2);
};

// Cria intervalo
const interval = setInterval(() => {
  // Pega o horário atual
  const now = new Date();

  // Formata a data
  const dataHora =
    zeroFill(now.getUTCDate()) +
    "/" +
    zeroFill(now.getMonth() + 1) +
    "/" +
    now.getFullYear() +
    " " +
    zeroFill(now.getHours()) +
    ":" +
    zeroFill(now.getMinutes()) +
    ":" +
    zeroFill(now.getSeconds());

  // Exibe na tela
  document.getElementById("data-hora").innerHTML = dataHora;
}, 1000);

function openAndClose(id) {

  if (document.getElementById(id).classList.contains("oculto")) {
    document.getElementById(id).classList.remove("oculto");
  } else {
    document.getElementById(id).classList.add("oculto");
  }
}
