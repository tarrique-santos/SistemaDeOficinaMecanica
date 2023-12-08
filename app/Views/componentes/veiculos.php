<head>
    <link rel="stylesheet" href="css/caixa.css">
</head>
<h1 id='veiculos' style="color:#85D3F2;">Veiculos:</h1>
<div id="cx">
    <?php foreach ($veiculos as $veiculo):?>
    <div id="cxPecas">
        <div>
            <h4>
                Código <?php echo $veiculo['id'] ?>
            </h4>
            <div>
               Cor: <?php echo $veiculo['cor'] ?>
            </div>
            <div>
                Modelo: <?php echo $veiculo['modelo'] ?>
            </div>
            <div>
               Ano: <?php echo $veiculo['ano'] ?>
            </div>
            <div>
               IDcliente <?php echo $veiculo['clienteid'] ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>