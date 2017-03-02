<div class="container">
    <div class="jumbotron">
        <p class="lead">Entre em contato conosco através do formulário abaixo!</p>
    </div>
    <fieldset>
        <legend>Formulário de Contato</legend>
        <form class="form-horizontal" method="POST">
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Informe seu nome" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Informe seu endereço de e-mail" name="email">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Assunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Informe o assunto" name="assunto">
                </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mensagem</label>
                <div class="col-sm-10">
                      <textarea class="form-control" rows="5" id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui..."></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-primary">Gravar</button>
                </div>
            </div>
        </form>
    </fieldset>
</div>
