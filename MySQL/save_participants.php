<?php
session_start();
include("../MySQL/connection.php");

$full_name = mysqli_real_escape_string($conexao, trim($_POST['full_name']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$age = mysqli_real_escape_string($conexao, trim($_POST['age']));
$birth_date = mysqli_real_escape_string($conexao, trim($_POST['birth_date']));
$tel = mysqli_real_escape_string($conexao, trim($_POST['tel']));
$sql = "INSERT INTO $database_db (full_name, cpf, age, birth_date, tel, data_registro) VALUES ('$full_name', '$cpf', '$age', '$birth_date', '$tel', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../index.php');
exit;
