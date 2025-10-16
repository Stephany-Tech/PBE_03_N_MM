<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumário - Aula10_01</title>
</head>
<body>
    <h1>Sumário</h1>
    <h2>Aula 16/10/2025</h2>
    <h3>config.php<h3>
<?php
// Define o tipo de banco de dados a ser usado: 'sqlite' ou 'mysql'
define('DB_TYPE', 'sqlite'); // Altere para 'mysql' para usar o MySQL

// Config para SQLite
if (DB_TYPE === 'sqlite') {
    define("DATABASE_SQLITE", "database.sqlite3");
} 
// Config para Mysql
elseif (DB_TYPE === 'mysql') { 
    define("USER_MYSQL", "root");
    define("PASS_MYSQL", "");
    define("DBNAME_MYSQL", "test");
    define("HOST_MYSQL", "localhost");
} 
else {
     die("SGBD não definido! <b>" . DB_TYPE."</b>");
 }
?>
    
</body>
</html>