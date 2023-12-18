<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de peça</title>
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

    <form action="<?php echo url_to('equipes/criar') ?>" method="post">

<div class="cxLogin">
    <label for="">Nome da equipe:</label>
    <input type="text" name="nome">
</div>
<div class="cxLogin">
    <label for="">Mecânicos:</label>
    <div id='cxCheckBox'>
        <?php foreach ($mecanicos as $mecanico): ?>
            <div id='checks'>
                <div>
                    <label for="">
                        <?php echo $mecanico['nome'] ?>
                    </label>
                </div>
                <div>
                    <input type="checkbox" value="<?php echo $mecanico['id'] ?>" name='idmecanico[]' id='checkbox'>
                    <!-- Adicione [] aqui para indicar que é um array -->
                    <input type="hidden" name="idmecanico_hidden[]" value="<?php echo $mecanico['id'] ?>">
                    <!-- Adicione um campo hidden para garantir que todos os checkboxes sejam enviados -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<div class="cxEntrar">
    <input id="btnLogar" type="submit" placeholder="" value="Salvar">
</div>
</form>


</body>

</html>