<?php if(!class_exists('Rain\Tpl')){exit;}?>

    <div class="cotainer questionario_page">

        <div class="questionario text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-6">
                <h1>Questionário</h1>
                <h3>Realizaremos algumas perguntas para analisarmos o índice de ataque aos usuários diante a Pandemia</h3>
                </div>
            </div>  
        </div>

        <div class="justify-content-center align-items-center row">
            <div class="col col-md-5">
                <form class="form_questionario mb-4" action="/indice" method="POST">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control"  name="desnome">
                        </div>
                        <div class="col-md-6">
                            <label for="nome">Sobrenome</label>
                            <input type="text"  class="form-control" name="dessobrenome">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        
                        <div class="col-md-6">
                            <label for="idade">Grau de escoloaridade</label>
                            <input type="text" class="form-control" name="desgrau">
                        </div>
                        <div class="col-md-6">
                            <label for="idade">Idade</label>
                            <input type="number" class="form-control" name="desidade">
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="">Sofreu algum ataque virtual durante a pandemia do COVID-19?</label>
                        <textarea class="form-control" name="quest1" id="" cols="10" rows="2"></textarea>
                        <hr>
                    </div>
                    <div class="form-row">
                        <label for="">Sofreu alguma perda de dados?</label>
                        <textarea class="form-control" name="quest2" id="" cols="10" rows="2"></textarea>
                        <hr>
                    </div>
                    <div class="form-row">
                        <label for="">Houve acesso à informações pessoais tais como dados de identidade, telefone, nº de cartões de crédito, endereço ou outros?</label>
                        <textarea class="form-control" name="quest3" id="" cols="10" rows="2"></textarea>
                    </div>

                    <button type="submit" class="btn-grad btn-block btn-info px-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
