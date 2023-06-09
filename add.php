<?php
require_once 'init.php';

$name = isset($_POST['name']) ? $_POST['name'] : null;
$especie = isset($_POST['especie']) ? $_POST['especie']: null;
$raca = isset($_POST['raca']) ? $_POST['raca']: null;
$idade = isset($_POST['idade']) ? $_POST['idade']: null;

if (empty($name) || empty($especie) || empty($raca) || empty($idade))
{
    echo"Volte e preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO pets (name, especie, raca, idade) VALUES (:name, :especie, :raca, :idade)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':especie', $especie);
$stmt->bindParam(':raca', $raca);
$stmt->bindParam(':idade', $idade);
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