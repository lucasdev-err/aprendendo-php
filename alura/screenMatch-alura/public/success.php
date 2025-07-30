<?php 

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Filme inserido</title>
</head>
<body>
    <h1><?= $filme['nome']; ?></h1>
    <dl>
        <dt>Ano de Lancamento</dt>
        <dd><?= $filme['anoLancamento']; ?></dd>

        <dt>Nota</dt>
        <dd><?= $filme['nota']; ?></dd>

        <dt>Genero</dt>
        <dd><?= $filme['genero']; ?></dd>


    </dl>
</body>
</html>