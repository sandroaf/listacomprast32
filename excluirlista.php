<?php
    require_once("conexao.php");
    if (isset($_GET["codigo"])) {
        $stmt = $conn->prepare("DELETE FROM lista WHERE codigo = :codigo");
        if ($stmt->execute(["codigo" => $_GET["codigo"]])) {
           redirecionar("index.php","Lista excluída com sucesso");
        } else {
           redirecionar("index.php","Erro ao excluir lista: ".$_GET["codigo"]); 
        }
    } else {
        redirecionar("index.php","Erro ao excluir lista");
    }
?>