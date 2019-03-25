<?php 
        include_once('./includes/header.php')
      ?>

<link rel="stylesheet" href="css/contact.css">
<div class="card bg-light mt-6">
    <article class="card-body mx-auto" >
        <h4 class="card-title mt-3 text-center">Login</h4>
   
        <p>
            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
        </p>
        <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
        <form>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Usuário" type="text">
            </div>
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Senha" type="password">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Entrar </button>
            </div>
            <p class="text-center"> <a href=""> Esqueceu a senha ?</a> </p>
            
        </form>
    </article>
</div> <!-- card.// -->

</div>
<!--container end.//-->


<?php  
        include_once('./includes/footer.php')
      ?>