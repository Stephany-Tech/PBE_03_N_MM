<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula08_01 - 25/09/2025</h1>
    <h2>Operador de Comparação</h2>
    <h3>Relacional</h3>
    <?php
    $a=10;
    $b="10";
    echo "Igualdade = ".($a==$b)."<br>"; // apresentam o mesmo valor 10 (mesmo valor de variável)  true - 1
    echo "Idêntico = ".($a===$b)."<br>"; // apresentam tipo de variaveis diferentes - uma é string e outra é nº inteiro - false - nada 
    echo "Não igual = ".($a!=$b)."<br>"; // a não é igual a b - false - nada
    echo "Não Idêntico = ".($a!==$b)."<br>"; //a  e b eles não são identicos - true - 1
    $a="10";
    $b="10";
    echo "Igualdade = ". ($a==$b)."<br>"; // mesmo valores da variável 
    echo "Identico = ". ($a===$b)."<br>"; // mesmo valor da variável e mesmo tipo 
    ?>
    <br>
    <h3>>, <, <=, >=</h3>
    <?php
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>";
echo "Menor ou igual: ".($a<=$b)."<br>"; // 1
echo "Maior: ".($c>$b)."<br>"; // 1
echo "Maior ou igual: ".($c>=$b)."<br>"; // 1
?>


<h2>Operador Lógico</h2> 

<h3> Não - not - !</h3>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);
    $d= !($a<=$b); //resolve o que está dentro dos parentes e o resultado você nega 
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
    $e=(($a<=$b) && ($a>=200)); // V // F = FALSE
    echo "<br>";
    var_dump($e);
    $e=(($a<=$b) && !($a>=200)); // V // V = TRUE  
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
    $f=(($a<=$b) || ($a>=200)); // V // F == TRUE  
    echo "<br>";
    var_dump ($f);
    $f=(($a<=$b) || !($a>=200)); // V // V == TRUE  
    echo "<br>";
    var_dump ($f);
    $f=(!($a<=$b) || ($a>=200)); // F // F == FALSE
    echo "<br>";
    var_dump ($f);
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
    $g=(($a<=$b) xor ($a>=200)); // V // F = TRUE 
    echo "<br>";
    var_dump($g);
    ?>

     <h2>Operador Ternário</h2>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso"; // condição ? valor se for verdadeiro : valor se for falso
    $e=($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>
    <br>
</body>
</html>
