<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    <title>Corrida | Inscrição</title>
</head>

<body>
    <form action="./mysql/save_participants.php" method="post">
        <div class="main_race">
            <div class="left_race">
                <h1>Faça sua inscrição<br>E venha para essa maratona!</h1>
                <img src="./assets/image/race.svg" class="left_race_image" alt="race">
            </div>
            <div class="right_race">
                <div class="card_race">
                    <h1>Preencha seu cadastro</h1><br>
                    <div class="text_field">
                        <label for="full_name">Nome Completo</label>
                        <input type="text" name="full_name" placeholder="Nome Completo" required />
                    </div>
                    <div class="text_field">
                        <label for="tel">CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="CPF" />
                    </div>
                    <div class="text_field">
                        <label for="age">Idade</label>
                        <input type="number" name="age" placeholder="Idade" required />
                    </div>
                    <div class="text_field">
                        <label for="birth_date">Data nascimento</label>
                        <input type="date" name="birth_date" placeholder="Data Nascimento" required />
                    </div>
                    <div class="text_field">
                        <label for="tel">Telefone</label>
                        <input type="tel" id="tel" name="tel" placeholder="(00) 00000-0000" required />
                        <label class="text_field">Genero</label>
                    </div>
                    <div>
                        <input class="checkbox" name="genre" type="checkbox" value="Masculino" onclick="marcaDesmarca(this)">
                        <label class="checkbox2">Masculino</label>
                        <input class="checkbox" name="genre" type="checkbox" value="Feminino" onclick="marcaDesmarca(this)">
                        <label class="checkbox2">Feminino</label>
                        <input class="checkbox" name="genre" type="checkbox" value="Outro" onclick="marcaDesmarca(this)">
                        <label class="checkbox2">Outro</label>
                    </div>
                    <button class="btn_submit">Fazer inscrição</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(function() {
            $("#cpf").inputmask({
                mask: "999.999.999-99"
            });
            $("#tel").inputmask({
                mask: "(##) #####-####"
            });
        });

        function marcaDesmarca(caller) {
            var checks = document.querySelectorAll('input[type="checkbox"]');
            checks.forEach(c => c.checked = (c == caller));
        }
    </script>
</body>

</html>