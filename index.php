<!-- <?php
    $games = [
        [
            'team_1' => 'Olimpia Milano',
            'point_1' => '55',
            'team_2' => 'Cantù',
            'point_2' => '60'
        ],
        [
            'team_1' => 'Fortitudo Verona',
            'point_1' => '102',
            'team_2' => 'Orlandina Basket',
            'point_2' => '34'
        ],
    ];
    var_dump($game);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-snacks-b1</title>
    </head>
    <body>
        <main>
            <ul>
                <?php foreach ($games as $game){ ?>
                <li> <?php echo $game['team_1']; ?> - <?php echo $game['team_2']; ?> | <?php echo $game['point_1']; ?> - <?php echo $game['point_2'];?> </li> <?php } ?>
            </ul>
        </main>
    </body>
</html> -->

<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->




<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php 
    $name = $_GET['name'];
    $mail =$_GET['mail'];
    $age =$_GET['number'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <form action="./index.php" method='GET'>
            <label for="name">name</label>
            <input type="text" name='name' id='name'>
            <label for="mail">email</label>
            <input type="text" name='mail' id='mail'>
            <label for="number">number</label>
            <input type="text" name='number' id='number'>
            <button type='submit'>
                send
            </button>
        </form>
        <?php
            $name= str_replace('',$_GET['name'], $name);
            echo $name;
            $mail= str_replace('',$_GET['mail'], $mail);
            echo $mail;
            $age= str_replace('',$_GET['number'], $age);
            echo $age;

            if (strlen($name) > 3 ) {
                echo ' - the name is longer than 3 characters - ';
            }elseif (str_contains ($mail , '@')) {
                echo '- the mail is right - ';
            }
        ?>
    </main>
</body>
</html>