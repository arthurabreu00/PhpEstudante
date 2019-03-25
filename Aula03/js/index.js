$('.cpf').mask('000.000.000-00', {reverse: true});



(function(){


    const ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           if(document.querySelector('.estados')) listEstates(JSON.parse(this.response));
        }
    };
    ajax.open("GET",'http://servicodados.ibge.gov.br/api/v1/localidades/estados/', true);
    ajax.send();
})();


function listEstates(res){
    const listEstados = document.querySelector('.estados');
   
    res.forEach(element => {

       const html  = `
       <option value="${element.id}"> ${element.nome} </option>`

       listEstados.innerHTML += html;
    });


    listEstados.addEventListener('change',event =>{
        secondAjax(event.target.value);
    });
}

function secondAjax(value){
    const ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           if(document.querySelector('.cidades')) listCities(JSON.parse(this.response));
        }
    };
    ajax.open("GET",`http://servicodados.ibge.gov.br/api/v1/localidades/estados/${value}/municipios`, true);
    ajax.send();
}

function listCities(res){
    const listEstados = document.querySelector('.cidades');
    res.forEach(element =>{


        const html  = `
        <option value="${element.id}"> ${element.nome} </option>`
 
        listEstados.innerHTML += html;
    })
}
