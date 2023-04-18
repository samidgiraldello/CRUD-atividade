<?php
require_once 'init.php';

$nomeEspecie = isset($_POST['nomeEspecie']) ? $_POST['nomeEspecie'] : null;


$PDO = db_connect();
$sql = "INSERT INTO especie (nomeEspecie) VALUES (:nomeEspecie)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nomeEspecie', $nomeEspecie);
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{  
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>