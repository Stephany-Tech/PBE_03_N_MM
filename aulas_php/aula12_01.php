<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12_ 01 - 06/11/2025</title>
</head>
<body>
<?php
 echo "<h1>Variáveis do Tipo Array</h1>";
 echo "<h2>Foreach</h2>";

$nomes = array("João", "Maria", "José");
foreach ($nomes as $nome) {
    echo "Nome: $nome <br>";
}

echo "<hr>";
$idades = array("João" => 25, "Maria" => 30, "José" => 35);
foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos <br>";
}

echo "<hr>";
echo "<h2>Manipulando Arrays em PHP</h2>";
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"];
$total = count($nomes);
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}

echo "<hr>";
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf);
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);
echo "<pre>";print_r($uf);echo "</pre>";

echo "<hr>";
echo "<h2>Exercícios de Arrays</h2>";
echo "<h4>Crie um array associativo que armazene o nome e o preço de três produtos diferentes. Em seguida, exiba o preço do segundo produto.</h4>";
$produtos = [
    "teclado" => 100,
    "mouse" => 50,
    "monitor" => 700
];

echo $produtos["mouse"];

echo "<br>";
echo "<h4>Crie um array multidimensional para representar as informações de uma classe, contendo o nome dos alunos e suas respectivas notas.</h4>";
$livros = [
    [
        "Título" => "1984",
        "Autor" => "George Orwell",
        "Ano" => 1949
    ],
    [
        "Título" => "O Senhor dos Anéis",
        "Autor" => "J.R.R. Tolkien",
        "Ano" => 1954
    ],
    [
        "Título" => "Dom Casmurro",
        "Autor" => "Machado de Assis",
        "Ano" => 1899
    ]
];

foreach ($livros as $livro) {
    foreach ($livro as $chave => $valor) {
        echo "$chave: $valor<br>";
    }
    echo "<br>";
}

?>
</body>
</html>