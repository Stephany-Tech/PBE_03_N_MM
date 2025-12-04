<!DOCTYPE html>
<html lang="pt-br"> 
<head>  
   <meta charset="UTF-8"> 
   <title>Aula09_01 - 02/10/2025</title> 
</head> 
<body>
  <h1>Aula09_01</h1>  
  <h2>Estruturas Condicionais</h2>
  <h3>Idade</h3>
  <?php
  $idade = 18;

  if ($idade >= 18) {
      echo "Você é maior de idade.<br>";
  }
  else {
      echo "Você é menor de idade.<br>"; 
  }
?>

<hr>
<h3>Semáforo</h3>
<?php
  $cor = "Laranja";
  if ($cor == "Verde") {
      echo '<span style="color: green;">PASSE</span>, o farol está verde.'; 
  } elseif ($cor == "Laranja") {
      echo '<span style="color: orange;">ATENÇÃO</span>, o farol ficará vermelho.';
  } else {
      echo '<span style="color: red; "PARE</span> o farol está vermelho';
  }
?>

<hr>
<h3>Bom dia, Boa Tarde e Boa Noite</h3>
<?php
  $hora = -1; 
  if ($hora >= 5 and $hora < 12) {
    echo "Bom dia!";
  }elseif ($hora >= 12 and $hora <= 18) {
    echo "Boa tarde!";
  } elseif ($hora >= 18 and $hora <= 24) {
    echo "Boa noite!";
  }elseif ($hora >= 0 and $hora <5) {
    echo "Boa noite!";
  }else {
    echo '<span style="color: red;">Erro: Hora desconhecida</span>'; 
  }
  /*
Professor fez de forma diferente, mas da minha forma 
também deu certo 
*/
  ?> 

<hr> 
  <h3>Executando mensagem com Ternário</h3>
  <?php
  $idade = 12;
  $mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
  echo $mensagem;
  ?>
  
  <hr>
  <h3>Dias da Semana - Switch Case</h3> 
  <?php
  date_default_timezone_set("America/Sao_Paulo"); // Para determinar o fuso horário
  echo date("d/m/y H:i:s")."<br>";
  
  $diaSemana = date('w');  // Retorna o dia da semana em número do seu servidor (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
// Switch Case pega os valores e compara 
  ?>

  <h3>Criptografia</h3>
  <?php
  echo md5("Uninove");
  ?>
</body>
</html>
