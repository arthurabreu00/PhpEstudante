const formLogin = document.querySelector('.form-login'); // Seleciona o formulario.
const inputsLogin = formLogin.querySelectorAll('input'); // Seleciona todos os inputs contidos no formulario.

// Adicionando ações caso, ocorra um envio de formulario (submit).
formLogin.addEventListener('submit',event =>{
    event.preventDefault(); // Impede do submit ser realizado.

    let errors = 0; // Contador de erros (Campos vazios).

    // Para cada input faça: 
    inputsLogin.forEach( input =>{

        if(input.value == ""){ // Se o campo especifico estiver vazio.

            alert('Preencha o campo ' + input.dataset.item); // Alerta para preencher o campo e o nome do mesmo.

            errors++; // Incrimentando ao contador de erros.

            input.style.borderColor = 'red'; // E Sinalize o campo em vermelho.

            input.focus(); // Foca-se o cursor no campo em falta.
        }

    });

    if(errors == 0) formLogin.submit(); // Se não tiver nenhum erro, finalmente realize o envio do formulario.
    
});


