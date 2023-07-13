<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
    <script>
        function RedirectToForm() {
            window.location.href = "/pessoa/form";
        }
    </script>
</head>
<body>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
        </tr>
            <?php foreach($model->rows as $pessoa): ?>
            <tr>
                <td><?= $pessoa->pessoa_codigo ?></td>
                <td><?= $pessoa->pessoa_nome ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    <button onclick="RedirectToForm()">Alterar Cadastro</button>
</body>
</html>