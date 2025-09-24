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
<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>"; // == igual 
echo "Idêntico = ".($a===$b)."<br>"; // ==idêntico
echo "Não igual = ".($a!=$b)."<br>"; //não igual
echo "Não Idêntico = ".($a!==$b)."<br>"; //!== não idêntico 
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