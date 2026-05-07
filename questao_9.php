<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <h1>Questão 9</h1>
    

</body>
</html>

<?php

function validor($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

?>
<a href="questao_10.php">Questão 10</a>
 </body>
 </html>