function exercicio(n) {
  if (n === 1) {
    return 1;
  }

  return n * exercicio(n - 1);
}

const resultado = document.querySelector("#resultado")
const valor = document.querySelector("#valor")
const calcular = document.querySelector("#calcular")

calcular.addEventListener("click", () => {
  const { value } = valor
  const valorInteiro = parseInt(value)
  resultado.value = exercicio(valorInteiro)
})