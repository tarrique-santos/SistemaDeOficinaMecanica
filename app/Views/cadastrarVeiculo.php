<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Automóvel</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <a href="cadastros">
        <div id="btnVoltar">
            <svg id="iconMenu" width="25" height="25" fill="#0c9ce1" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" onclick="gerarPlaca()">
                <path fill-rule="evenodd"
                    d="M11.648 20.048a1.2 1.2 0 0 1-1.696 0l-7.2-7.2a1.2 1.2 0 0 1 0-1.696l7.2-7.2a1.2 1.2 0 0 1 1.696 1.696L6.497 10.8H20.4a1.2 1.2 0 1 1 0 2.4H6.497l5.151 5.152a1.2 1.2 0 0 1 0 1.696Z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </a>

    <form action="<?php echo site_url('veiculos/criar') ?>" method="post">

        <div class="cxLogin">
            <div class="cxLogin">
                <label for="">Dono:</label>
                <select name="clienteid" id="dono_id">
                    <?php foreach ($donos as $dono): ?>
                        <option value="<?php echo $dono['id'] ?>" name='clienteid'>
                            <?php echo $dono['nome'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <label for="">Cor:</label>
            <select name="cor" id="cor">
                <option value="preto">Preto</option>
                <option value="Cinza/Prata">Cinza/Prata</option>
                <option value="Branco">Branco</option>
                <option value="Azul">Azul</option>
                <option value="Vermelho">Vermelho</option>
                <option value="Bege">Bege</option>
            </select>
        </div>

        <div class="cxLogin">
            <label for="">Modelo:</label>
            <input type="text" name="modelo">
        </div>

        <div class="cxLogin">
            <label for="">Placa</label>
            <input type="text" name="placa" id="placa_gerada" value="">
            <div id='dice' onclick="gerarPlaca()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-dice-5-fill" viewBox="0 0 16 16">
                    <path
                        d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M12 13.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3M5.5 12a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0m8 0a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0M8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"></path>
                </svg>
            </div>
        </div>

        <div class="cxLogin">
            <label for="">Ano:</label>
            <select name="ano">
                <?php for ($ano = 1950; $ano <= 2023; $ano++): ?>
                    <option value="<?= $ano ?>"><?= $ano ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <div class="cxEntrar">
            <input id="btnLogar" type="submit" placeholder="" value="Salvar">
        </div>

    </form>

    <script>
        function gerarPlaca() {
            var caracteresPermitidos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            var placaGerada = '';

            for (var i = 0; i < 8; i++) {
                var indiceAleatorio = Math.floor(Math.random() * caracteresPermitidos.length);
                placaGerada += caracteresPermitidos.charAt(indiceAleatorio);
            }

            document.getElementById('placa_gerada').value = placaGerada;
        }
    </script>

</body>

</html>
