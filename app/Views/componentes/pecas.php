<head>
    <link rel="stylesheet" href="./css/caixa.css">
</head>
<div id="cx">
    <?php foreach ($pecas as $peca):?>
    <div id="">
        <div>
            <h4>
                <?php echo $peca['nome'] ?>
            </h4>
            <div id="cxCodigo" style=''>
                <h3>Código:</h3>
                <?php echo $peca['id'] ?>
            </div>
        </div>
        <div>
            <h3>
                R$<?php echo $peca['preco'] ?>
            </h3>
        </div>
    </div>
    <?php endforeach; ?>
</div>