<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style  
        type="text/css">
        input, label {
            display: block;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>
        <form method="post" action="/pessoa/form/insert">
            <label for="nome">Nome:</label>
            <input type="text"id="nome" name="nome">
            <button type="submit">Salvar</button>
        </form>
    </fieldset>
    <fieldset>
        <legend>Alteração no Cadastro</legend>
        <form method="post" action="/pessoa/form/update">
            <label for="codigo">Código:</label>
            <input type="number" name="codigo" id="codigo" value="0">
            <label for="nome">Nome:</label>
            <input type="text"id="nome" name="nome">
            <button type="submit">Atualizar</button>
        </form>
    </fieldset>
    <fieldset>
        <legend>Remoção de cadastro</legend>
        <form method="post" action="/pessoa/form/delete">
            <label for="codigo">Código:</label>
            <input type="number" name="codigo" id="codigo" value="0">
            <button type="submit">Remover</button>
        </form>
    </fieldset>
</body>
</html>