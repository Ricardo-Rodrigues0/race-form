<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <link rel="icon" type="image/x-icon" href="./Image/favicon.png">
    <title>Corrida | Inscrição</title>
</head>

<body>
    <form action="./MySQL/save_participants.php" method="post">
        <div class="main-race">
            <div class="left-race">
                <h1>Faça sua inscrição<br>E venha para essa maratona!</h1>
                <img src="./Image/race.svg" class="left-race-image" alt="race">
            </div>
            <div class="right-race">
                <div class="card-race">
                    <h1>Preencha seu cadastro</h1><br>
                    <div class="text-field">
                        <label for="full-name">Nome Completo</label>
                        <input type="text" name="full_name" placeholder="Nome Completo" required />
                    </div>
                    <div class="text-field">
                        <label for="tel">CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="CPF" />
                    </div>
                    <div class="text-field">
                        <label for="age">Idade</label>
                        <input type="number" name="age" placeholder="Idade" required />
                    </div>
                    <div class="text-field">
                        <label for="birth-date">Data nascimento</label>
                        <input type="date" name="birth_date" placeholder="Data Nascimento" required />
                    </div>
                    <div class="text-field">
                        <label for="tel">Telefone</label>
                        <input type="tel" id="tel" name="tel" placeholder="(00) 00000-0000" required />
                        <!-- <label class="text-field">Genero</label> -->
                    </div>
                    <!-- <div>
                    <input class="checkbox" name="masculino" type="checkbox" onclick="marcaDesmarca(this)">
                    <label class="checkbox2">Masculino</label>
                    <input class="checkbox" name="feminino" type="checkbox" onclick="marcaDesmarca(this)">
                    <label class="checkbox2">Feminino</label>
                    <input class="checkbox" name="outro" type="checkbox" onclick="marcaDesmarca(this)">
                    <label class="checkbox2">Outro</label>
                </div> -->
                    <button class="btn-submit">Fazer inscrição</button>
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