<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="container container_cadastro">
  <!--CADASTRO-->
  <div class="justify-content-center align-items-center row">
    <div class="col-md-7">
        <form class="form_cadastro">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Nome Completo</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Nome">
              </div>
            </div>
        
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="form-group col-md-6">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="">
              </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefone">Senha</label>
                    <input type="password" class="form-control" name="">
                </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Manter-me conectado
                </label>
              </div>
            </div>
            <button class="btn-grad btn-block btn-info">Sign up</button>
          </form>
      </div>
  </div>

 
