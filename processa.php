<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Postagem Processada</title>
</head>
<body>
    <h2>Status da Postagem</h2>

    <?php
    // Verifica se os dados foram enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recupera os dados do formulário usando o array $_POST
        // A chave do array é o valor do atributo 'name' de cada campo
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $autor = $_POST['autor'];

        // Exibe os dados recebidos na tela (simulando uma publicação)
        echo "<p><strong>Postagem publicada com sucesso!</strong></p>";
        echo "<p><strong>Título:</strong> " . $titulo . "</p>";
        echo "<p><strong>Conteúdo:</strong><br>" . nl2br($conteudo) . "</p>"; // nl2br converte quebras de linha para <br>
        echo "<p><strong>Autor:</strong> " . $autor . "</p>";

        // (Na próxima aula, aprenderemos a salvar esses dados em um arquivo ou banco de dados)
        echo "<p><em>Funcionalidade de salvamento será implementada em breve!</em></p>";

    } else {
        // Se alguém tentar acessar este arquivo diretamente, sem enviar o formulário
        echo "<p>Acesso não permitido. Por favor, envie o formulário de postagem.</p>";
    }
    ?>

    <br>
    <a href="formulario.html">← Voltar para o formulário</a>
</body>
</html>