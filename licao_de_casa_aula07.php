<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição_de_Casa_aula07</title>
</head>
<body>
    <h1>Operadores - Comparação, Lógico, Ternário</h1>
</body>
</html>


<h2>Operador de Comparação</h2>
<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>"; // == igual - compara apenas os valores das variavies, iguinorando o tipo de dado
echo "Idêntico = ".($a===$b)."<br>"; // ==idêntico - compara valores e tipos de dados, e verifica se os tipos de dados são os mesmos
echo "Não igual = ".($a!=$b)."<br>"; //não igual - compara se os valores das variaveis são diferentes 
echo "Não Idêntico = ".($a!==$b)."<br>"; //!== não idêntico - compara se os valores são diferentes ou se os tipos são diferentes
?>
<?php
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>"; // < menor
echo "Menor ou igual: ".($a<=$b)."<br>"; // <= menor ou igual 
echo "Maior: ".($c>$b)."<br>"; //> maior
echo "Maior ou igual: ".($c>=$b)."<br>"; // >= maior ou igual 
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
$e=(($a<=$b) &&  ($a>=$c));
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

<h2>Formulário de idade e resultado com Operador de Comparação, Lógico e Ternário></h2>
    <form method='post' action""> 
        Idade: <input type="number" name="Idade: " required><br>
        <button type="submit">Classificar<button>
</form>

<?phpif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega o valor da idade do formuário e converte para número
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
}

