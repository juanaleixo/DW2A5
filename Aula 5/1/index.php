<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Destino GET</h1>
    <hr>
    <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>Nome informado: $nome<br>Email: $email</p>";
    ?>

    <p>
        <a href="index.php?nome=Juan Aleixo&email=juanaleixoferes@hotmail.com&cor=lightblue">
            Nome: Juan Aleixo - Email: juanaleixoferes@hotmail.com
        </a>
    </p>

    <p>
        <a href="index.php?nome=Pessoa2&email=pessoa2@hotmail.com&cor=orange">
            Nome: Pessoa2 - Email: pessoa2@hotmail.com
        </a>
    </p>


    <p>
        <a href="index.php?nome=<?=$nome?>&email=<?=$email?>&cor=coral">
            Cor: Coral
        </a>
    </p>

    <p>
        <a href="index.php?nome=<?=$nome?>&email=<?=$email?>&cor=cyan">
            Cor: Cyan
        </a>
    </p>

    <style>
        body{
            background-color: <?= $cor; ?>;
        }
    </style>

</body>
</html>