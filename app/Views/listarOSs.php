<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Ordens de Serviço</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="css/lista.css">
</head>

<body>
    <h1>Listagem de Ordens de Serviço:</h1>
    <table>
        <thead>
            <tr>
                <th>ID/Código</th>
                <th>Veículo</th>
                <th>Equipe</th>
                <th>Peça</th>
                <th>Data de Abertura</th>
                <th>Data de Conclusão</th>
                <th>Descrição do Problema</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($ordens as $ordem): ?>
        <tr>
            <td><?= $ordem['id'] ?></td>
            <td><?= $ordem['veiculoPlaca'] ?></td>
            <td><?= $ordem['equipeNome'] ?></td>
            <td><?= $ordem['pecaNome'] ?></td>
            <td><?= $ordem['dataabertura'] ?></td>
            <td><?= $ordem['dataconclusao'] ?></td>
            <td><?= $ordem['descricaoproblema'] ?></td>
            <td><?= $ordem['statusordem'] ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>

    </table>
</body>

</html>