<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';



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
    <main>
        <form action="" method="GET">
            <input type="text" name="name" placeholder="Inserisci il tuo nome">
            <input type="text" name="mail" placeholder="Inserisci la tua E-mail">
            <input type="text" name="age" placeholder="Inserisci la tua età">
            <button type="submit">Invia</button>
            <?php if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.')) { ?>
                <small> Accesso riuscito</small>
            <?php } else { ?>
                <small>Accesso Negato</small>
            <?php } ?>
        </form>
    </main>
</body>

</html>