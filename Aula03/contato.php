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
                          <input required type="text" class="form-control" id="name" name="name"
                              placeholder="Digite seu nome">
                      </div>

                      <div class="form-group input-group ">
                          <label class="d-none" for="email">E-mail</label>

                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-at"></i> </span>
                          </div> <input required type="email" class="form-control" name="email" id="email"
                              placeholder="Digite seu e-mail">
                      </div>


                      <div class="form-group input-group">
                          <label class="d-none" for="cpf">CPF</label>

                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
                          </div> <input required type="text" class="form-control cpf" name="cpf" id="cpf"
                              placeholder="Digite seu CPF">
                      </div>
                      <div class="form-group input-group">
                          <label class="d-none" for="telefone"> Telefone </label>

                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-phone"></i> </span>
                          </div> <input required type="text" class="form-control" id="telefone" name="telefone"
                              placeholder="Digite seu telefone">
                      </div>
                      <div class="form-row">
                          <div class="form-group input-group col-md-6">
                              <label class="d-none" for="estado "> Estado </label>
                              <div class="input-group-prepend">
                                  <span class="input-group-text"> <i class="fas fa-city    "></i></span>
                              </div>
                              <select required id="estado " class="form-control custom-select estados">
                                  <option value ="" > Selecione sua estado </option>
                              </select>
                          </div>

                          <div class="form-group  input-group col-md-6">
                              <label class="d-none" for="cidade"> Cidade</label>

                              <div class="input-group-prepend">
                                  <span class="input-group-text"> <i class="fa fa-building" aria-hidden="true"></i> </span>
                              </div>

                              <select required id="cidade" class="form-control custom-select cidades">
                                  <option value ="" > Selecione sua Cidade </option>
                              </select>
                          </div>

                      </div>


                      <div class="form-group input-group">

                          <label class="d-none" for="assunto"> Assunto </label>

                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-mail-bulk"></i> </span>
                          </div> <input required type="text" class="form-control" id="assunto" name="assunto"
                              placeholder="Digite seu assunto">
                      </div>

                      <div class="form-group input-group">
                          <label class="d-none" for="consideracoes"> Considerações </label>

                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-comment-alt"></i> </span>
                          </div> <textarea required class="form-control" id="consideracoes" name="consideracoes"
                              rows="3" value="" placeholder="Digite sua mensagem"></textarea>
                      </div>

                      <button type="submit" class="form-submit btn btn-primary">Enviar</button>
                      <button type="reset" class="btn btn-secondary">Resetar</button>
                  </form>
                  <br>
              </article>
          </div>

      </div>


      <?php  
        include_once('./includes/footer.php')
      ?>