<head>
    <link rel="stylesheet" href="css/caixa.css">
</head>
<h1 id="veiculos">Equipes cadastradas</h1>
<div id="cx">
    <?php foreach ($equipes as $equipe):?>
    <div id="cxequipes">
        <div>
            <h4>Nome:
                <?php echo $equipe['nome'] ?>
            </h4>
            <div id='caixa'>
                <h4>Código:</h4>
                <?php echo $equipe['id'] ?>
            </div>
        </div>
        <div>
            <h6>
                Membros da equipe:
                <?php echo $equipe['nomeMecanico'] ?>
            </h6>
        </div>
    </div>
    <?php endforeach; ?>
</div>