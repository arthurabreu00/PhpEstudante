      <?php 
        include_once('./includes/header.php')
      ?>

      <link rel="stylesheet" href="css/contact.css">



      <div class="card bg-light mt-5">
          <article class="card-body mx-auto">
              <h4 class="card-title mt-3 text-center">Contato</h4>
              <p class="text-center">Mande uma mensagem para nós</p>

              <form class="contact-form">
                  <div class="form-group input-group">
                      <label for="name" class="d-none">Nome</label>
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                      <input require type="text" class="form-control" id="name" name="name"
                          placeholder="Digite seu nome">
                  </div>

                  <div class="form-group input-group ">
                      <label class="d-none" for="email">E-mail</label>

                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-at"></i> </span>
                      </div> <input require type="text" class="form-control" name="email" id="email"
                          placeholder="Digite seu e-mail">
                  </div>


                  <div class="form-group input-group">
                      <label class="d-none" for="cpf">CPF</label>

                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
                      </div> <input require type="text" class="form-control cpf" name="cpf" id="cpf"
                          placeholder="Digite seu CPF">
                  </div>
                  <div class="form-group input-group">
                      <label class="d-none" for="telefone"> Telefone </label>

                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-phone"></i> </span>
                      </div> <input require type="text" class="form-control" id="telefone" name="telefone"
                          placeholder="Digite seu telefone">
                  </div>
                  <div class="form-row">
                      <div class="form-group input-group col-md-6">
                          <label class="d-none" for="estado "> Estado </label>
                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-city    "></i></span>
                          </div>
                          <select require id="estado " class="form-control custom-select estados">
                              <option value=""> Selecione sua estado </option>
                          </select>
                      </div>

                      <div class="form-group  input-group col-md-6">
                          <label class="d-none" for="cidade"> Cidade</label>

                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fa fa-building" aria-hidden="true"></i> </span>
                          </div>

                          <select require id="cidade" class="form-control custom-select cidades">
                              <option value=""> Selecione sua Cidade </option>
                          </select>
                      </div>

                  </div>


                  <div class="form-group input-group">

                      <label class="d-none" for="assunto"> Assunto </label>

                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-mail-bulk"></i> </span>
                      </div> <input require type="text" class="form-control" id="assunto" name="assunto"
                          placeholder="Digite seu assunto">
                  </div>

                  <div class="form-group input-group">
                      <label class="d-none" for="consideracoes"> Considerações </label>

                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-comment-alt"></i> </span>
                      </div> <textarea require class="form-control" id="consideracoes" name="consideracoes" rows="3"
                          value="" placeholder="Digite sua mensagem"></textarea>
                  </div>

                  <button type="submit" class="form-submit btn btn-primary">Enviar</button>
                  <button type="reset" class="btn btn-secondary">Resetar</button>
              </form>
              <br>
          </article>
      </div>

      </div>

      <script>

const inputs = document.querySelectorAll('[require]');
const form = document.querySelector('.contact-form');

console.log(inputs, form);

initEvents();
firstAjax();
addDanger(inputs);

function initEvents() {

    form.addEventListener('submit', e => {
        e.preventDefault();

        inputs.forEach(input => {
            if (input.value === "") {
                input.style.borderColor = 'red';

                addAlert(input,"Preencha seu campo");

            }
        });

        validateEmail();

    });
}

function validateEmail(){
    const email = document.querySelector('#email');
    const regexEmail = email.value.match(/\S+@\w+\.\w{2,}(\.\w{2})?/g);

    if(regexEmail == null) addAlert(email,"E-mail invalido",true);
    
}


function addAlert(element,text, opt = false){


    if(!element.parentNode.querySelector('.alerta')){
        const span = document.createElement('span');
        span.classList.add('alerta');
        span.innerHTML = "Preencha este campo";
        span.style.color = 'red';
        element.parentNode.appendChild(span);
        return false;
    }else if(opt){
        element.parentNode.querySelector('.alerta').innerHTML = text;
    }
}

function firstAjax() {

    const ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (document.querySelector('.estados')) listEstates(JSON.parse(this.response));
        }
    };
    ajax.open("GET", 'http://servicodados.ibge.gov.br/api/v1/localidades/estados/', true);
    ajax.send();

}

function addDanger(elements) {


    elements.forEach(element => {
        const span = document.createElement('span');
        span.classList.add('text-danger');
        span.classList.add('ml-2');
        span.innerHTML = ' *';
 
        element.parentNode.appendChild(span);
    })

}


function listEstates(res) {
    const listEstados = document.querySelector('.estados');

    res.forEach(element => {

        const html = `
       <option value="${element.id}"> ${element.nome} </option>`

        listEstados.innerHTML += html;
    });


    listEstados.addEventListener('change', event => {
        secondAjax(event.target.value);
    });
}

function secondAjax(value) {
    const ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (document.querySelector('.cidades')) listCities(JSON.parse(this.response));
        }
    };
    ajax.open("GET", `http://servicodados.ibge.gov.br/api/v1/localidades/estados/${value}/municipios`, true);
    ajax.send();
}

function listCities(res) {
    const listEstados = document.querySelector('.cidades');
    res.forEach(element => {
        const html = `
        <option value="${element.id}"> ${element.nome} </option>`

        listEstados.innerHTML += html;
    })
}
      </script>


      <?php  
        include_once('./includes/footer.php')
      ?>