<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação PHP</title> 
</head>
<body>

    <?php 
    // Inclui o arquivo de configuração, carregando as constantes
    require_once 'conecta.php';
    ?>

    <h1>Ambiente Configurado com Sucesso!</h1>

    <p>O arquivo de configuração foi carregado.</p>
    
    <?php
    // Teste para exibir o tipo de banco de dados que está sendo usado
    if (defined('DB_TYPE')) {
        echo "<h2>Detalhes da Configuração:</h2>";
        echo "<p>Tipo de Banco de Dados: <strong>" . DB_TYPE . "</strong></p>";
        
        // Exemplo de como usar uma constante definida no conecta.php
        if (DB_TYPE === 'sqlite') {
            echo "<p>Caminho do arquivo SQLite: " . DATABASE_SQLITE . "</p>";
        } 
    }
    ?>

    <p>Se você consegue ler esta mensagem, o seu código está rodando no servidor!</p>

</body>
</html>