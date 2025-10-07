<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo AV1 - 09/10/2025</title>
</head>
<body>
    <h1>Prática de Estudo AV1 - 09/10/2025</h1> 
    <h2>Operadores Aritméticos</h2>
    <h3>Exercício 1)</h3>
<?php
/*
Crie duas variáveis $a e $b com valores inteiros.
Calcule e exiba: soma, subtração, multiplicação, divisão, módulo e exponenciação.
*/
$a = 11;
$b = 2; 
echo "soma: ". ($a + $b); 
echo "<br>subtração: ". ($a - $b); 
echo "<br>multiplicação: ". ($a * $b);
echo "<br>divisão: ". ($a / $b);
echo "<br>módulo da divisão :". ($a % $b); 
echo "<br>expotenciação: ". ($a ** $b);
?> 
<hr>
<h2>Operadores de Comparação</h2>
<h3>Exercício 2)</h3>
<?php
/*
Crie duas variáveis $x e $y.
Use operadores de comparação (==, !=, >, <, >=, <=) e exiba o resultado com var_dump().
*/
$x = 11;
$y = 18;
var_dump($x == $y);
echo "<br>";
var_dump ($x === $y);
echo"<br>"; 
var_dump ($x != $y);
echo "<br>";
var_dump ($x > $y); 
echo "<br>"; 
var_dump ($x < $y);
echo "<br>";
var_dump ($x >= $y); 
echo "<br>"; 
var_dump ($x <= $y);
echo "<br>";
?>

<hr>
<h2>Operadores Lógicos </h2>
<h3>Exercício 3)</h3>
<?php
/*
Crie duas variáveis booleanas $p e $q.
Teste operadores lógicos !, &&, ||, xor e exiba os resultados com var_dump().
*/
$p = 44;
$q = 51;
var_dump ($p <= $q); // verdadeiro 
echo "<br>";
var_dump (!($p <= $q)); // Resultado inverso // falso 
echo "<br>";
var_dump ($p==$q) && ($p === $q); //Tudo precisa ser verdadeiro para dar verdadeiro // falso, falso = falso
echo "<br>";
var_dump ($q > $p) || ($p >= $q); // Se apenas uma condição for verdaderia, o resultado dará versadeiro // verdadeiro, falso = verdadeiro 
echo "<br>";
var_dump ($p != $q) xor ($p == $q); // Se duas condições forem diferentes os resultados = verdadeiro 
echo "<br>"; 
?>

<hr>
<h2>Operadores de Atribuições</h2>
<h3>Exercício 4)</h3>
<?php
/*Crie variáveis $a = 10 e $b = 3.
Utilize +=, -=, *=, /=, %=, **= e exiba os resultados.*/
$a = 10; 
$b = 3; 
$a += $b; // $a = $a + $b // $a = 10 + 3 // $a = 13
echo $a;
echo "<br>";
$b -= $a; // $b = $b - $a // $b = 3 - 13 // $a = -10
echo $b;
echo "<br>"; 
$a *= $b; // $a = $a * $b // $a = 13 * -10 // $a = -130
echo $a; 
echo "<br>"; 
$a /= $b; // $a = $a * $b // $a = -130 / 10 // $a = 13
echo $a; 
echo "<br>"; 
$a %= $b; // $a = $a % $b // $a = 13 % -10 // $a = 3
echo $a; 
echo "<br>"; 
$a ** $b; // $a = $a ** $b // $a = 13 -¹0 // $a = não existe
echo $a; 
echo "<br>"; 
?>

<hr>
<h2>Incremento e Decremento</h2>
<h3>Exrcicío 5)</h3>
<?php
/*
Crie uma variável $i = 5.
Aplique ++$i, $i++, --$i, $i-- e exiba o valor depois de cada operação usando echo.
*/
$i = 5; 
echo $i++;; // valor mostrado = 5 // valor final = 6 // soma 1 depois que o echo foi executado 
echo "<br>";
echo $i++;; // valor mostrado = 6 // valor final = 7
echo "<br>";
echo ++$i;  // valor mostrado = 8; valor final = 8 // soma 1 antes que o echo seja executado 
echo "<br>";
echo $i--;; // valor mostrado = 8 // valor final = 7 // subtrai 1 após o echo ser executado
echo "<br>";
echo $i--;; // valor mostrado = 7 // valor final = 6 // subtrai 1 após o echo ser executado
echo "<br>";
echo --$i;; // valor mostrado = 5 // valor final = 5 //subtrai 1 antes que o echo seja executado
echo "<br>";
?>

<hr>
<h2>Switch Case</h2>
<h3>Exercício 6)</h3>
<?php
/*Crie uma variável $dia = 4.
Use switch para exibir o nome do dia da semana correspondente (0 = domingo, 1 = segunda…).*/
$DiadaSemana = 4; // Deve apresentar o mesmo nome a variável
switch ($DiadaSemana) { // Deve apresentar o mesmo nome da variável
case 0:
    echo "Domingo";
break;
case 1:
    echo "Segunda";
break;
case 2:
    echo "Terça";
break; 
case 3:
    echo "Quarta"; 
break; 
case 4: 
    echo "Quinta"; 
break; 
case 5:
    echo "Sexta"; 
break; 
case 6:
    echo "Sábado";
default:
    echo "Dia da semana inválido";
}
?>

<hr> 
<h2>Função Date</h2>
<h3>Exercício 7)</h3>
<?php
/* Exiba o dia da semana atual usando date('w') e depois transforme em nome do dia usando switch.
Saída esperada: (depende do dia em que você rodar o código, exemplo: quarta-feira) */
$DiadaSemana = date ('w'); // Deve apresentar o mesmo nome a variável
switch ($DiadaSemana) { // Deve apresentar o mesmo nome da variável
case 0:
    echo "Domingo";
break;
case 1:
    echo "Segunda";
break;
case 2:
    echo "Terça";
break; 
case 3:
    echo "Quarta"; 
break; 
case 4: 
    echo "Quinta"; 
break; 
case 5:
    echo "Sexta"; 
break; 
case 6:
    echo "Sábado";
default:
    echo "Dia da semana inválido";
}
?>

<hr>
<h2>Criptografia com MD5</h2>
<h3>Ecercício 8)</h3>
<?php
/*
Crie uma variável $senha = "123456".
Gere o hash MD5 e exiba com echo.*/
$senha = 123456; 
echo md5($senha);
?>

<hr>
<h2>Criptografia segura com password_hash() e password_verify()</h2>
<h3>Exercício 9)</h3>
<?php
/*
Crie $senha = "minhaSenhaSecreta".
Gere o hash seguro usando password_hash().
Simule o usuário digitando a senha e verifique com password_verify().
*/
$senha = "minhaSenhaSecreta"; 

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "Hash Gerado (Armazenado): " . $hash . "<br>";
echo "---<br>";

// 2. VERIFICAÇÃO DA SENHA (Sem criar novas variáveis)
// password_verify() checa a $senha pura contra o $hash armazenado.
// O resultado (TRUE ou FALSE) é usado diretamente no 'if'.
if (password_verify($senha, $hash)) {
    echo "VERIFICAÇÃO: **Sucesso!** Senha correta.";
} else {
    echo "VERIFICAÇÃO: Falhou! Senha incorreta.";
}
?>

<hr>
<h2>var_dump()</h2>
<h3>exrcício 10)</h3>
<?php
/*
Crie variáveis de diferentes tipos: inteiro, float, string, boolean, array.
Use var_dump() para exibir o tipo e valor.
*/
$inteiro = 10;
$float = 14.5; // Não deve star entre aspas ""
$string = "Maria" ;
// boolean
$a = 11;
$b = 18;
$array = [2, 4, 6]; // Não deve estra entre aspas ""
var_dump ($inteiro); 
echo "<br>";
var_dump ($float);
echo "<br>";
var_dump ($string);
echo "<br>";
var_dump ($a < $b) && ($b != $a);
echo "<br>";
var_dump ($array); /* Foi executado: array(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } // Contem 3 elemntos; 
[0] é o primeiro elemento, que sempre começa a contar do 0; => Indica que [0] tem um valor seguinte; int (nº) 
indica que o valor é um número inteiro; [1], [2] indica a ordem de números - 0, 1  e 2*/
echo "<br>";
?>
</body>
</html>