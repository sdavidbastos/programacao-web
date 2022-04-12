const teste = [1, 2.5, 22, -1, -2.5, -34, 3, 4, 5]

function exercicio(arr){
    return arr.reduce((previous, current) =>{
        if(current > previous){
            previous = current
        }
        return previous
    }, 0)
}

const resultado = exercicio(teste)

console.log(resultado)