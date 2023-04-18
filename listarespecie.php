<?php
require_once 'init.php';

$PDO =  db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM especie  ORDER BY nomeEspecie ASC";

$sql = "SELECT id, nomeEspecie FROM especie ORDER BY nomeEspecie ASC";

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
    <style type="text/css">
        .container{
            margin-top: 50px;
            margin-left; 100px;
        }
    </style>
    </head>

    <body>
    <div class="container">
      <div id="menu"></div>
    </div>
        <div class="container">
            <h1>Abrigo de Animais</h1>
            <h2>Lista de espécies</h2>
            <table class="table table-striped" width="50%" border="1">
                <thead>
                    <tr>
                        <th>Espécie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $user['nomeEspecie'] ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            </div>
        </body>
    </html>

                

