<?php
require 'init.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}
$PDO = db_connect();
$sql = "SELECT name, NomePet, espécie, raça, birthddate FROM  crud WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INIT);
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
    </head>
    <body>
    <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Editar Pet</h4>
          <form class="needs-validation" novalidate>
          <div class="row">
          <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
                </div>
            <div class="col-md-6 mb-3">
                <label for="especie">Espécie</label>
                <input type="text" class="form-control" id="especie" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir uma espécie válida.
                </div>
                <div class="col-md-6 mb-3">
                <label for="raça">Raça</label>
                <input type="text" class="form-control" id="raça" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir uma raça válida.
            </div>
            <div class="col-md-6 mb-3">
                <label for="idade">Idade</label>
                <input type="text" class="form-control" id="idade" placeholder="" value="" required>
                <div class="invalid-feedback">
                É obrigatório inserir uma idade válida.
            </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-success">Alterar</button>
            </form>
            </html>
    </div>
    </body>

</html>
