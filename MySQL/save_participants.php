<?php
session_start();
include("../mysql/connection.php");

setcookie('usuario', 'Fulano');

$full_name = mysqli_real_escape_string($conexao, trim($_POST['full_name']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$age = mysqli_real_escape_string($conexao, trim($_POST['age']));
$birth_date = mysqli_real_escape_string($conexao, trim($_POST['birth_date']));
$tel = mysqli_real_escape_string($conexao, trim($_POST['tel']));
$genre = mysqli_real_escape_string($conexao, trim($_POST['genre']));

$sql = "INSERT INTO $database_db (full_name, cpf, age, birth_date, tel, genre, registration_date) VALUES ('$full_name', '$cpf', '$age', '$birth_date', '$tel', '$genre', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../index.php');
exit;