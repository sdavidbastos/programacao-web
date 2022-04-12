const massa = parseFloat(prompt("Digite sua massa"));
const altura = parseFloat(prompt("Digite sua altura"));

const imc = (massa * 10_000) / (altura * altura);

console.log(imc)

if (imc < 18) { window.alert("Magreza leve") }
else if (imc >= 18 && imc < 25) {
    window.alert("Saudável")
}
else if (imc >= 25 && imc < 30) {
    window.alert("Sobrepeso")
}
else if (imc >= 30) {
    window.alert("Obesidade")
}  