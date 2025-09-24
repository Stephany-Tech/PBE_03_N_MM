<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição_de_casa</title>
</head>
<body>
    <h1>Lição de Casa - Para: 18/09/25</h1>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Nome: <input type="text" name="Nome"><br>
        Data: <input type="date" name="Data"><br>
        AV1: <input type="text" name="AV1"><br>
        AV2: <input type="text" name="AV2"><br>
        <br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['Nome'];
        $data = $_POST['Data'];
        $av1 = (float)$_POST['AV1'];
        $av2 = (float)$_POST['AV2'];
    
        $media = ($av1 + $av2) / 2;

        echo "<h1>Resultado da Média</h1>";
        echo "Nome do Aluno: " . htmlspecialchars($nome) . "<br>";
        echo "Data: " . htmlspecialchars($data) . "<br>";
        echo "Nota da AV1: " . number_format($av1, 2, ',', '.') . "<br>";
        echo "Nota da AV2: " . number_format($av2, 2, ',', '.') . "<br>";
        echo "A média final é: " . number_format($media, 2, ',', '.') . "<br>";
        
        $nota_aprovacao = 7.0;

        if ($media >= $nota_aprovacao) {
            // A cor é definida dentro do atributo 'style' da tag <p>
            echo "<p style='color: green;'>Parabéns! Você foi APROVADO.</p>";
        } else {
            echo "<p style='color: red;'>Que pena! Você foi REPROVADO.</p>";
        }
        // --- FIM DA PARTE MODIFICADA ---
    }
    ?>
</body>
</html>