<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10_01 - 30/10/2025</title>
</head>
<body>
<?php
echo "<h1>Variáveis do Tipo Array</h1>";
	$x=10;
	$x=7.5;
	$x="teste";
	echo "x=$x<br>";
	// $y=array(10,7.5), "teste"
	// 0   1   2
	$y=[10,7.5,"teste"]; 
	echo "<br>y=".$y[1];
	print_r($y); // exibe conteúdo de array
    echo"<br>y[2]=".$y[1];
    print_r($y);
    echo "<h2>Array indexado</h2>";
    echo"y[0]=".$y[0]; // 10
    echo"<br>y[1]=".$y[1]; // 7.5
    echo"<br>y[2]=".$y[2]; // teste
    $y[0]%=2; // 10 % 2 = 0
    $y[1]+=0.5; // 7.5 + 0.5 = 8
    $y[2].=",123"; // teste . ,123 = teste,123
    echo"<br>y[0]=".$y[0];
    echo"<br>y[1]=".$y[1];
    echo"<br>y[2]=".$y[2];
    echo"<hr>";
    echo "<h2>Array Associativo</h2>";
    $estudante = [
        "id"=>1,
        "ra" =>1234,
        "nome"=>"Bete",
        "av1"=>8,
        "av2"=>7.5
    ];
    /* Mostrar todos os dados do estudante e calcular a 
    media entre av1 e av2*/
    echo "<pre>";print_r($estudante);echo "</pre>"; // Apenas para ver a diferença
    print_r($estudante); // Apenas para ver a diferença
    // 1. EXTRAÇÃO DOS DADOS DO ARRAY PARA VARIÁVEIS SIMPLES:
    $id = $estudante['id'];
    $ra = $estudante['ra'];
    $nome = $estudante['nome'];
    $media = ($estudante ['av1'] + $estudante ['av2'])/2;
    
    echo "<h4>Saída:</h4>";
    echo "O aluno de <strong > id </strong>" . $id . " e <strong> ra </strong>" . $ra . " cujo <strong > nome </strong> é " . $nome . " apresenta <strong> média </strong> de:  " . $media;

    echo "<h2>Array Multimensional</h2>";
    $num=[// 0 1 2 -> coluna 
            [1,2,3], // linha 0
            [4,5,6], // linha 1
            [7,8,9] // linha 2
    ];
    echo"<br>num =".$num[1][0];
    $naval = [ // 4x4 
               //  0       1         2        3
                ["água", "água","submarino","água"], // 0
                ["veleiro","água","água","água"], // 1
                ["água", "água","água","avião"], // 2
                ["água","trem","água","água"] // 3
    ];
    // imprimir: veleiro, trem, submarino, avião
    echo "<br>".$naval[1][0]." ".$naval[3][1]." ".$naval[0][2]." ".$naval[2][3];
?>
</body>
</html>