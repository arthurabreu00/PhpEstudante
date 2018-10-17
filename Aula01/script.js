let op = document.querySelector(".operador").value;
let nm = document.querySelector(".nome");
let res = document.querySelector("#res");

let btn = document.querySelector("button");

let num1 = Number(document.querySelector("#num1").value)
let num2 = Number(document.querySelector("#num2").value)

nm.innerHTML = op;

btn.addEventListener('click',e =>{

    e.preventDefault()

})

switch(op){

    case "Selecionar":
        res.innerHTML = 'Selecione uma operação';
    break;

    case 'Soma':
         res.innerHTML = num1 + num2;
    break;

    case 'Subtração':
         res.innerHTML = num1 - num2;
    break;

    case 'Divisão':
         res.innerHTML = num1 / num2;
    break;

    case 'Multiplicação':
         res.innerHTML = num1 * num2;
    break;
};

