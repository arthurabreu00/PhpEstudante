let btn = document.querySelector("button");

btn.addEventListener('click',e =>{
    let nm = document.querySelector(".nome");
    let res = document.querySelector("#res");

    let num1 = Number(document.querySelector("#num1").value)
    let num2 = Number(document.querySelector("#num2").value)
    let op = document.querySelector(".operador").value;
    
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

    nm.innerHTML = op;

})



