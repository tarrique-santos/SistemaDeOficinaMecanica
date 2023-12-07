<div id="cxUsuarios">
    <div class="usuarios" id="mecanico">
        <h1>Mecânicos:</h1>
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
    </div>
    <div class="usuarios" id="cliente">
        <h1>Clientes:</h1>
        <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>telefone</th>
            <th>endereço</th>
        </tr>
        <?php foreach ($clientes as $cliente):?>
        <tr>
            <td>
                <?php echo $cliente['id'] ?>
            </td>
            <td>
                <?php echo $cliente['nome'] ?>
            </td>
            <td>
                <?php echo $cliente['email'] ?>
            </td>
            <td>
                <?php echo $cliente['telefone'] ?>
            </td>
            <td>
                <?php echo $cliente['endereco'] ?>
            </td>
         
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</div>