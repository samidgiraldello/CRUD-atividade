<?php
require 'init.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}
$PDO = db_connect();
$sql = "SELECT name, especie, raca, idade FROM pets WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!is_array($user))
{
    echo "Nenhum usuário encontrado";
    exit;
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Edição de Pet</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
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
        <h2>Formulário de Adoção</h2>
        <p class="lead">Edite abaixo os dados do pet</p>
</div>

<div class="col-md-8 order-md-1">
  <h4 class="mb-3">Editar Pet</h4>
  <form class="needs-validation" novalidate action="form-edit.php" method="post">
  <div class="row">
  <div class="col-md-6 mb-3">
        <label for="primeiroNome">Nome</label>
        <input type="text" class="form-control" name="name" id="primeiroNome" placeholder="" value="<?php echo $user ['name'];?>" required>
        <div class="invalid-feedback">
        É obrigatório inserir um nome válido.
        </div>
</div>
    <div class="col-md-6 mb-3">
        <label for="especie">Espécie</label>
        <select class="custom-select d-block w-100" name="especie" id="especie" required>
            <option value="">Escolha uma opção</option>
            <option value>Canina</option>
            <option value>Fenina</option>
</select>
</div>

<div class= "invalid-feedback">  É obrigatório inserir uma espécie válida.
        </div>
</div>
<div class="row">
        <div class="col-md-6 mb-3">
        <label for="raça">Raça</label>
        <input type="text" class="form-control" name="raca" id="raça" placeholder="" value="<?php echo $user ['raca'];?>" required>

        <div class="invalid-feedback">
        É obrigatório inserir uma raça válida.
    </div>
</div>
    <div class="col-md-6 mb-3">
        <label for="idade">Idade</label>
        <input type="text" class="form-control" name="idade" id="idade" placeholder="" value="<?php echo $user ['idade'];?>" required>
        <div class="invalid-feedback">
        É obrigatório inserir uma idade válida.
    </div>
</div>
</div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-success">Editar</button>
</div>
    </form>
</div>
</body>

</html>
