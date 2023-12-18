<head>
    <link rel="stylesheet" href="css/caixa.css">
</head>
<h1 id='veiculos' style="color:#85D3F2;">Veiculos:</h1>
<table id="cx">
    <thead id='cabeca'>
        <tr>
            <th>Código</th>
            <th>Proprietário</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Código do Cliente</th>
        </tr>
    </thead>
    <tbody id='corpo'>
        <?php foreach ($veiculos as $veiculo): ?>
            <tr>
                <td><?php echo $veiculo['id'] ?></td>
                <td><?php echo $veiculo['nomeCliente'] ?></td>
                <td><?php echo $veiculo['placa'] ?></td>
                <td><?php echo $veiculo['cor'] ?></td>
                <td><?php echo $veiculo['modelo'] ?></td>
                <td><?php echo $veiculo['ano'] ?></td>
                <td><?php echo $veiculo['clienteid'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>