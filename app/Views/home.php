<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/home.css">
    <title>Home</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>telefone</th>
            <th>endereço</th>
        </tr>
        <?php foreach ($mecanicos as $mecanico):?>
        <tr>
            <td>
                <?php echo $mecanico['id'] ?>
            </td>
            <td>
                <?php echo $mecanico['nome'] ?>
            </td>
            <td>
                <?php echo $mecanico['email'] ?>
            </td>
            <td>
                <?php echo $mecanico['telefone'] ?>
            </td>
            <td>
                <?php echo $mecanico['endereco'] ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
       </main>
</body>

</html>