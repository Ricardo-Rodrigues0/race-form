<?php

$host_db = "127.0.0.1";
$user_db = "root";
$senha_db = "";
$database_db = "race";

$link = new mysqli($host_db, $user_db, $senha_db);
$link->set_charset('utf8');

$query_create_schema = "CREATE SCHEMA IF NOT EXISTS $database_db" or die ("ERRO! não foi possível fazer a consulta mysql -> " . $link->connection_error);
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
                        PRIMARY KEY (`id`));" or die("ERRO! não foi possível criar tabela -> " . $link->connect_error);

$result_create_table = $link->query($query_create_table);

define('HOST', $host_db);
define('USUARIO', $user_db);
define('SENHA', $senha_db);
define('DB', $database_db);

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('ERRO! não foi possível conectar');