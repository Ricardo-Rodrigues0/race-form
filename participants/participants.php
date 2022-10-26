<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="shortcut icon" href="../assets/image/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Corrida | Participantes</title>
</head>

<body>
  <div class="col-md-9 mt-3">
    <div class="row">
      <?php
      session_start();
      include("../mysql/connection.php");

      $sql = mysqli_query($conexao, "SELECT * FROM $database_db LIMIT 999") or die(mysqli_error($conexao));

      while ($aux = mysqli_fetch_assoc($sql)) { ?>

        <div class="col-md-3">
          <div class="sidebar-module">
            <div class="main_race">
            <div class="card">
            <?php 
                $imagem = '';
                if ($aux["genre"] == 'Masculino') $imagem = '../assets/image/homem.jpg';
                else if ($aux["genre"] == 'Feminino') $imagem = '../assets/image/mulher.jpg';
                else $imagem = '../assets/image/race.svg';
              ?>
              <img src="<?php echo $imagem; ?>" style="width: 10vw; display: flex; align-items: center; justify-content: center;" class="card-img-top" alt="Imagem participante">
              <div class="card-body">
                <h5 class="card-title" _msthash="2950259" _msttexthash="307684">Participante</h5>
                <p class="card-text" _msthash="2874352" _msttexthash="10912447">
                  Nome: <?php echo $aux["full_name"]; ?> <br />
                  CPF: <?php echo '***.***.' . explode(".", $aux["cpf"])[2]; ?><br />
                  Idade: <?php echo $aux["age"]; ?><br />
                  Data Nascimento: <?php echo date('d/m/Y', strtotime($aux['birth_date'])); ?><br />
                  Telefone: <?php echo $aux["tel"]; ?><br />
                  Gênero: <?php echo $aux["genre"]; ?><br />
                  Inscrição: <?php echo date('d/m/Y', strtotime($aux['registration_date'])) . ' às ' . date('H:i', strtotime($aux['registration_date'])); ?><br />
                </p>
              </div>
            </div>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>

</body>

</html>