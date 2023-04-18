<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro Espécie</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="form-validation.css" rel="stylesheet">
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(function(){
          $("#menu").load("navbar.html");
        });
      });
    </script>

  </head>
  <body class="bg-light">
  <div class="container">
      <div id="menu"></div>
    </div>
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/PETMIAU.png" alt="" width="72" height="72">
                <h2>Formulário de Espécie</h2>
                <p class="lead">Cadastre abaixo a espécie do pet</p>
      </div>

      <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adicionar Espécie</h4>
          <form class="needs-validation" novalidate action="cadastrarespecie.php" method="post">
          <div class="row">
          <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome da Espécie</label>
                <input type="text" class="form-control" name="nomeEspecie" id="primeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
                </div>
</div>

</div>
</div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-success">Adicionar</button>
</div>
            </form>
    </div>
    </body>

</html>
