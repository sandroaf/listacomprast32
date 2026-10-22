<?php
if (isset($_POST["fnome"])) {
    $par = ["nome" => $_POST["fnome"]];
    require_once("conexao.php");
    $stmt = $conn->prepare("INSERT INTO lista (nome) VALUES (:nome);");
    $stmt->execute($par);
    redirecionar("index.php","Lista Incluída com sucesso");
} else {
    redirecionar("index.php","Erro ao incluir lista");
}
?>