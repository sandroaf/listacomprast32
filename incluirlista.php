<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="funcoes.js"></script>
    <title>Lista de Compras - Nova Lista</title>
</head>

<body>
    <main>
        <header>
            <h1>Lista de Compras - Nova Lista</h1>
        </header>
        <article>
            <form action="incluirlistasalva.php" method="POST">
                <label for="fnome">Nome: </label>
                <input if="fnome" name="fnome" required>
                <br>
                <br>
                <button type="submit">Salvar</button>
                <button type="reset" onclick="redirecionar('index.php')">Cancelar</button>
            </form>
        </article>
        <footer>
            <p></p>
        </footer>
    </main>
</body>

</html>