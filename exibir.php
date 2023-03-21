<?php
require_once 'init.php';

$PDO =  db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM pets  ORDER BY name ASC";

$sql = "SELECT id, name, especie, raca, idade FROM pets ORDER BY name ASC";

$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet MiAu</title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js"></script>
    <style type="text/css">
        .container{
            margin-top: 50px;
            margin-left; 100px;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <h1>Abrigo de Animais</h1>
            <h2>Lista de pets</h2>
            <p>Total de pets: <?php echo $total ?></p>
            <?php if ($total > 0): ?>
            <table class="table table-striped" width="50%" border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Raça</th>
                        <th>Idade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['especie'] ?></td>
                        <td><?php echo $user['raca'] ?></td>
                        <td><?php echo $user['idade'] ?></td>
                        <td>
                            <a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar</a>
                            <a href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm ('Tem certeza de que deseja remover?');">Remover</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p>Nenhum pet registrado</p>
                <?php endif; ?>
            </div>
            <div class="container">
                <p class="lead">Para voltar para a página inicial:</p>
                <a class="btn btn-lg btn-success" href="form-add.php" role="button">Clique aqui &raquo;</a>
            </div>
        </body>
    </html>

                

