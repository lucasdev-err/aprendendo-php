<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Tipos de Dados</title>
</head>
<body>
    <h1>Variaveis e Tipos de Dados</h1>
    <p>Toda variavel em php comeca com <strong>$</strong>, seguida pelo nome que deve comecar com uma letra ou underline (_), é case-sensitive</p>
    <p>Exemplos:</p>
    <?php 
        $x = 5; // Inteiro
        $nome = "Lucas"; // String
        $preco = 14.4; // Float
        $boolean = true; // Boolean
        echo "
            <p>$x - Inteiro</p>
            <p>$nome - String</p>
            <p>$preco - float</p>
            <p>$boolean - bool</p>
        "
    ?>
    <p>Variaveis sao criadas no momento da primeira atribuicao, sem necessidade de declaracao explicita.</p>
    <h1>Tipos de Dados</h1>
    <p>O php possui varios tipos nativos, sendo eles:</p>
    <ul>
        <li>null</li>
        <li>bool (true/false)</li>
        <li>int</li>
        <li>float</li>
        <li>string</li>
        <li>array, object, callable, resource</li>
    </ul>
    <p>O PHP faz <strong>type juggling:</strong> converte automaticamente os tipos para realizar operacoes.</p>
    <p>Para inspecionar o tipo de um valor, e usado o <strong>var_dump($variavel);</strong>.</p>
    <p>Exemplos mostrando a tipagem das variaveis anteriores:</p>
    <?php 
        echo var_dump($x) . var_dump($nome) . var_dump($preco) . var_dump($boolean);
    ?>
</body>
</html>