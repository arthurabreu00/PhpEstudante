      <?php 
        include_once('./includes/header.php')
      ?>
      
      <link rel="stylesheet" href="css/login.css">

      <div class="login-container container">
          <div class="row">
              <div class="col-sm-5">
                  <h1 class="txt-login text-justify text-white"> Bem-Vindo </h1>
                  <p class="sub-login text-white text-justify">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi nostrum totam minima ex nisi. Doloremque explicabo error repellat vel magnam dignissimos ea beatae impedit, mollitia, assumenda et! Obcaecati, illum ad.
                  </p>
              </div>

              <div class="login-col-sm-7 col-sm-7">
                  <div class="login-form-txt">
                      <h2>
                          Login
                      </h2>
                  </div>
                  <form class="login-form">
        
                        <label class="d-none" for="user"> Usuário </label>
                        <input class="login-form-input" name="user" placeholder="Usuário" />
            
                      <label class="d-none" for="password"> Senha </label>
                      <input class="login-form-input" type="password" name="password" placeholder="Senha" />
                      <div class="login-form-txt">
                          <a href="#"> Esqueceu a senha ? </a> 
                      </div>
                      <button type="submit" class="login-form-submit"> Login </button>
                  </form>
              </div>


              

        </div>

      <?php  
        include_once('./includes/footer.php')
      ?>