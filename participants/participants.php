<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <link rel="stylesheet" type="text/css" href="../assets/css/style-participants.css">
  <link rel="shortcut icon" href="../assets/image/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Corrida | Participantes</title>
</head>

<body>
<?php 
        session_start();
        include("../mysql/connection.php");
?>

  <div class="main">
    <div class="text_card">
      <h1>Participantes da corrida</h1>
    </div>
    <div class="col-md-9 mt-3">
      <div class="row">
        <?php

        $sql = mysqli_query($conexao, "SELECT * FROM $database_db ORDER BY full_name ASC") or die(mysqli_error($conexao));

        while ($aux = mysqli_fetch_assoc($sql)) { ?>

          <div class="col-md-3">
            <div class="sidebar-module">
              <div class="main_card">
                <div class="card">
                  <h1 class="participants_name"> <?php echo $aux["full_name"], ' #', $aux["id"]; ?> </h1><br />
                  <?php
                  $imagem = '';
                  if ($aux["genre"] == 'Masculino') $imagem = '../assets/image/homem.png';
                  else if ($aux["genre"] == 'Feminino') $imagem = '../assets/image/mulher.png';
                  else if ($aux["genre"] == 'Outro') $imagem = '../assets/image/outro.png';

                  if (file_exists($imagem) !== true) $imagem = '../assets/image/image_404.png';
                  ?>
                  <img src="<?php echo $imagem; ?>" style="width: 10vw; display: flex; align-items: center; justify-content: center;" class="card-img-top" alt="Imagem participante">
                  <div class="card-body">
                    <h5 class="card-title" _msthash="2950259" _msttexthash="307684">• <u>Informações do participante</u></h5><br />
                    <p class="card-text" _msthash="2874352" _msttexthash="10912447">
                    <strong>‣ Nome:</strong> <?php echo $aux["full_name"]; ?> <br />
                    <strong>‣ CPF:</strong> <?php echo '***.***.' . explode(".", $aux["cpf"])[2]; ?><br />
                    <strong>‣ Idade:</strong> <?php echo $aux["age"]; ?> anos<br />
                    <strong>‣ Data Nascimento:</strong> <?php echo date('d/m/Y', strtotime($aux['birth_date'])); ?><br />
                    <strong>‣ Telefone:</strong> <?php echo $aux["tel"]; ?><br />
                    <strong>‣ Gênero:</strong> <?php echo $aux["genre"]; ?><br />
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><strong>Inscrição feita dia <?php echo date('d/m/Y', strtotime($aux['registration_date'])) . ' às ' . date('H:i', strtotime($aux['registration_date'])); ?></strong></small>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>
</body>

</html>