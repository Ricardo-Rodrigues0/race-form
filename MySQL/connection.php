<?php

$host_db = "127.0.0.1";       //Host do banco de dados
$user_db = "root";           //Usuario do banco de dados
$senha_db = "";             //Senha do banco de dados
$database_db = "race";  //Nome da tabela que vai ser criada e armazenado os dados

$link = new mysqli($host_db, $user_db, $senha_db);
$link->set_charset('utf8');

$query_create_schema = "CREATE SCHEMA IF NOT EXISTS $database_db"
or die ("Error in the consult .. " . $link->connection_error);
$result_create_schema = $link->query($query_create_schema);

mysqli_select_db($link , $database_db);

$query_create_table = "CREATE TABLE IF NOT EXISTS $database_db (
                        id INT NOT NULL AUTO_INCREMENT,
                        full_name VARCHAR(200) NOT NULL,
                        cpf VARCHAR(32) NOT NULL,
                        age VARCHAR(32) NOT NULL,
                        birth_date VARCHAR(32) NOT NULL,
                        tel VARCHAR(32) NOT NULL,
                        data_registro DATETIME NOT NULL,
                        PRIMARY KEY (`id`));"
or die("Error in the create table ... " . $link->connect_error);
$result_create_table = $link->query($query_create_table);

define('HOST', $host_db);
define('USUARIO', $user_db);
define('SENHA', $senha_db);
define('DB', $database_db);

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
