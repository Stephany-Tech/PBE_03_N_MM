<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição_de_Casa_aula07</title>
</head>
<body>
    <h1>Operadores - Comparação, Lógico, Ternário</h1>

    <h2>Operador de Comparação</h2>
    <?php
    $a=10;
    $b="10";
    echo "Igualdade = ".($a==$b)."<br>";
    echo "Idêntico = ".($a===$b)."<br>";
    echo "Não igual = ".($a!=$b)."<br>";
    echo "Não Idêntico = ".($a!==$b)."<br>";
    ?>
    <?php
    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";
    echo "Menor ou igual: ".($a<=$b)."<br>";
    echo "Maior: ".($c>$b)."<br>";
    echo "Maior ou igual: ".($c>=$b)."<br>";
    ?>

    <h2>Operador lógico</h2>
    <h3> Não - not - !</h3>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);
    $d= !($a<=$b);
    var_dump($c);
    echo "<br>";
    var_dump($d);
    ?>

    <h3> E - and - &&</h3>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) and ($a<=$c));
    $e=(($a<=$b) && ($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <h3> Ou - or - ||</h3>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a>=$b) or ($a>=$c));
    $e=(($a>=$b) || ($a<=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <h3>Xor</h3>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) xor ($c<=$a));
    $e=(($a>=$b) xor ($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <h2>Operador Ternário</h2> 
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso";
    $e=($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>
    <br>

    ---

    <h2>Formulário de idade e resultado com Operador de Comparação, Lógico e Ternário</h2>
    <form method="post" action=""> 
        Idade: <input type="number" name="idade" required><br>
        <button type="submit">Classificar</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pega o valor da idade do formulário e converte para número
        $idade = (int)$_POST["idade"];
        $mensagem_ternario = "";

        // Usando IF e operadores de comparação e lógicos para a classificação principal
        if ($idade <= 12) {
            $mensagem_principal = "Resultado: Criança.";
        } elseif ($idade > 12 && $idade < 18) {
            $mensagem_principal = "Resultado: Adolescente.";
        } elseif ($idade >= 18 && $idade < 60) {
            $mensagem_principal = "Resultado: Adulto.";
        } else {
            $mensagem_principal = "Resultado: Idoso.";
        }

        // Usando o operador ternário para uma mensagem extra
        $mensagem_ternario = ($idade >= 60) ? "Você já entrou na terceira idade." : "Você ainda não chegou na terceira idade.";
        
        // Exibe os resultados
        echo "<br><h3>" . $mensagem_principal . "</h3>";
        echo "<h4>" . $mensagem_ternario . "</h4>";
    }
    ?>
</body>
</html>