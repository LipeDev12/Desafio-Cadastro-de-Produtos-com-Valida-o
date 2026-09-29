<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>

    <style>
        header {
            background-color:brown;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Cabeçalho da página e título -->
    <header>
        <h1>Cadastro de camisa calça e ténis</h1>
        <h2>Loja renans</h2>
    </header>

    <hr>
    <br>

    <!-- Começo do Formulário -->
    <form action="" method="post">

        <fieldset>
            <br>

            <label for="nomedoproduto">Nome do Produto:</label><br>
            <input type="text" id="nomedoproduto" name="nomedoproduto" required><br><br>

            <label for="preco">Preço do Produto:</label><br>
            <input type="number" id="preco" name="preco" step="0.01" min="0.01" required>

            <br><br>
            <button type="submit">Cadastrar Produto</button>
        </fieldset>
    </form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recebe os valores enviados pelo formulário
    $nome = $_POST['nomedoproduto'];
    $preco = $_POST['preco'];

    // Verifica se o preço é válido
    if ($preco <= 0) {

        echo "<p id='msg' style='color: red;'>Insira um preço maior que zero.</p>";
    } else {
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se houve erro na conexão
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        // Insere o registro no banco de dados
        $sql = "INSERT INTO produtos (nome, preco)
                VALUES ('$nome', '$preco')";

        if ($conn->query($sql) === TRUE) {

            echo "<p id='msg' style='color: darkgreen;'>
                    Produto cadastrado com sucesso!
                  </p>";
        } else {
            echo "<p id='msg' style='color: red;'>
                    Erro ao cadastrar: " . $conn->error . "
                  </p>";
        }
        // Fecha a conexão
        $conn->close();
    }
    // Oculta a mensagem após 5 segundos
    echo "
    <script>
        setTimeout(function() {
            const mensagem = document.getElementById('msg');

            if (mensagem) {
                mensagem.style.display = 'none';
            }
        }, 3000);
    </script>
    ";
}

?>

</body>
</html>
