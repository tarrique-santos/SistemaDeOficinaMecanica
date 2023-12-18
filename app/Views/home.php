<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Home</title>
</head>

<body>
    <h1>Cadastros:</h1>
    <div id="grid">
        <div class="itens">
            <h2>Ordens:
                <?php echo count($ordens); ?>
            </h2>
        </div>
        <div class="itens">
            <h2>Peças:
                <?php echo count($pecas); ?>
            </h2>
                
            </div>
        <div class="itens">
            <h2>Veículos:
                <?php echo count($veiculos); ?>
        </h2>
        
    </div>
    <div class="itens">
        
        <h2>Serviços:
            <?php echo count($servicos); ?>
        </h2>
    </div>
    <div class="itens">
        <h2>Mecânicos:
            <?php echo count($mecanicos); ?>
        </h2>
        
    </div>
    <div class="itens">
        <h2>Clientes:
            <?php echo count($clientes); ?>
        </h2>
        
    </div>
    <div class="itens">
        <h2>Equipes:
            <?php echo count($equipes); ?>
        </h2>
        
    </div>
    </div>
</body>

</html>