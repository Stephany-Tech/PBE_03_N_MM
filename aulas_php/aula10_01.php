<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10_01 - 23/10/2025 </title>
</head>
<body>
    <h1>Estruturas de Loops</h1>
    
<?php
echo "<h2>While<br></h2>";
$i = 0;
while($i<5){
    echo "$i ";
    $i++;
}
echo "<hr>";
    /*
    1) Qual a sáida? --> 0, 1, 2, 3, 4
    2) Qual o valor inicial? --> 0
    3) Qual a condição? --> O valor de i tem que ser menor que 1 
    4) Qual o contador? --> Valor de i + 1 = i 
    5) Quantas vezes o looping foi executado? --> 5 vezes 
    6) Qual o valor que tornou a condição falsa --> 5
*/

$i=13;
while($i<17){
    echo "$i ";
    $i++;
}
echo "<hr>";
/*
    1) 13, 14, 14,16
    2) 13
    3) $i<17 ou $i <=16
    4) $i++
    5) 4 
    6) 17
*/
$i=0; 
while($i<=10){
    echo "$i ";
    $i+=2;
}
echo "<hr>";
    // 1) 0 2 4 6 8 10
    // 2) 0
    // 3) $<=10 ou $<12 --> Pegar o último valor do loop
    // 4) $i+=2
    // 5) 6
    // 6) 12

echo "<h2>Do While</h2>";
$i=7;
do{
    echo "i ";
    $i++;
}while($i<5);
echo "<hr>";
echo "<h2>For</h2>";
echo "<hr>";
echo "<h2>Instrução For (aninhada)</h2>";
/*
1 5
1 6
2 5 
2 6
3 5
3 6
loop i começa no 1 até <=4
loop j começa no 5 até <=7
*/


?>
</body>
</html>