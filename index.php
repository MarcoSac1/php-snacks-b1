<?php
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
    // var_dump($game);
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
</html>

<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->