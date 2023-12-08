<head>
    <link rel="stylesheet" href="css/caixa.css">
</head>
<div id="cx">
    <?php foreach ($servicos as $servico):?>
    <div id="cxPecas">
        <div>
            <h4>
                <?php echo $servico['nome'] ?>
            </h4>
            <div>
                <?php echo $servico['id'] ?>
            </div>
        </div>
        <div>
            <h6>
                R$<?php echo $servico['preco'] ?>
            </h6>
        </div>
    </div>
    <?php endforeach; ?>
</div>