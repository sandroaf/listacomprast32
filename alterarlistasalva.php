<?php
if (isset($_POST["fnome"])) {
    $par = ["codigo" => $_POST["fcodigo"] ,"nome" => $_POST["fnome"]];
    require_once("conexao.php");
    $stmt = $conn->prepare("UPDATE lista SET nome = :nome WHERE codigo = :codigo");
    $stmt->execute($par);
    redirecionar("index.php","Lista alterada com sucesso");
} else {
    require_once("funcoes.php");
    redirecionar("index.php","Erro ao alterar a lista");
}
?>