<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro Pet</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/PETMIAU.png" alt="" width="72" height="72">
                <h2>Formulário de Adoção</h2>
                <p class="lead">Cadastre abaixo os dados do pet</p>
      </div>

      <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adicionar Pet</h4>
          <form class="needs-validation" novalidate action="add.php" method="post">
          <div class="row">
          <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control" name="name" id="primeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
                </div>
</div>
            <div class="col-md-6 mb-3">
                <label for="especie">Espécie</label>
                <input type="text" class="form-control" name="especie" id="especie" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir uma espécie válida.
                </div>
</div>
                <div class="col-md-6 mb-3">
                <label for="raça">Raça</label>
                <input type="text" class="form-control" name="raca" id="raça" placeholder="" value="" required>

                <div class="invalid-feedback">
                É obrigatório inserir uma raça válida.
            </div>
</div>
            <div class="col-md-6 mb-3">
                <label for="idade">Idade</label>
                <input type="text" class="form-control" name="idade" id="idade" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir uma idade válida.
            </div>
</div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-success">Adicionar</button>
</div>
            </form>
    </div>
    </body>

</html>
