const arrayTest = new Array(1, 2, 3, 4, 5)
function multArray(vetor, mult){
  for (let index = 0; index < vetor.length; index++) {
    vetor[index] *= mult;
  }
}
multArray(arrayTest, 10)
console.log(arrayTest)