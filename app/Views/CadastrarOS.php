<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>

    <a href="cadastros">
        <div id="btnVoltar">
            <svg id="iconMenu" width="25" height="25" fill="#0c9ce1" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M11.648 20.048a1.2 1.2 0 0 1-1.696 0l-7.2-7.2a1.2 1.2 0 0 1 0-1.696l7.2-7.2a1.2 1.2 0 0 1 1.696 1.696L6.497 10.8H20.4a1.2 1.2 0 1 1 0 2.4H6.497l5.151 5.152a1.2 1.2 0 0 1 0 1.696Z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </a>

    <form action="<?php echo url_to('os/criar') ?>" method="post">
        Cadastro de Cliente:

        <div class="cxLogin">
            <label for="">Placa veículo</label>
            <select name="veiculoid" id="veiculo_id">
                <?php foreach ($veiculos as $veiculo): ?>
                    <option value="<?= $veiculo['id'] ?>"><?= $veiculo['placa'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="cxLogin">
            <label for="">Equipe designada:</label>
            <select name="equipeid" id="equipe_id">
                <?php foreach ($equipes as $equipe): ?>
                    <option value="<?= $equipe['id'] ?>"><?= $equipe['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="cxLogin">
            <label for="">Peça</label>
            <select name="pecaid" id="peca_id">
                <?php foreach ($pecas as $peca): ?>
                    <option value="<?= $peca['id'] ?>"><?= $peca['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="cxLogin">
            <label for="">Data inicial</label>
            <input type="date" name="dataabertura" id="data_inicial" min="<?php echo date('Y-m-d'); ?>"
                onchange="setFinalDate()">
        </div>

        <div class="cxLogin">
            <label for="">Data final</label>
            <input type="date" name="dataconclusao" id="data_final" min="<?php echo date('Y-m-d'); ?>" disabled>
        </div>

        <div class="cxLogin">
            <label for="">Diagnóstico do defeito</label>
            <input type="text" name="descricaoproblema">
        </div>

        <div class="cxLogin">
            <label for="">Status</label>
            <select name="statusordem" id="status">
                <option value="pendente" name='statusordem'>Pendente</option>
            </select>
        </div>

        <div class="cxEntrar">
            <input id="btnLogar" type="submit" placeholder="Logar" value="Salvar">
        </div>
    </form>

    <script>
        function setFinalDate() {
            var initialDate = document.getElementById('data_inicial').value;

            if (initialDate) {
                var date = new Date(initialDate);
                date.setDate(date.getDate() + 7);
                var formattedDate = date.toISOString().split('T')[0];

                var currentDate = new Date();
                currentDate.setHours(0, 0, 0, 0);

                if (date <= currentDate) {
                    document.getElementById('data_final').value = '';
                    document.getElementById('data_final').setAttribute('disabled', 'disabled');
                } else {
                    document.getElementById('data_final').value = formattedDate;
                    document.getElementById('data_final').removeAttribute('disabled');
                }
            }
        }
    </script>

</body>

</html>
