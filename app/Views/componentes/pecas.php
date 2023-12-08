<head>
    <link rel="stylesheet" href="css/caixa.css">
</head>
<div id="cx">
    <?php foreach ($pecas as $peca):?>
    <div id="cxPecas">
        <div>
            <h4>
                <?php echo $peca['nome'] ?>
            </h4>
            <div>
                <?php echo $peca['id'] ?>
            </div>
        </div>
        <div>
            <h6>
                R$<?php echo $peca['preco'] ?>
            </h6>
        </div>
    </div>
    <?php endforeach; ?>
</div>