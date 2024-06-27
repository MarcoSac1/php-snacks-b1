<?php 
// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
// Create una cartella per ogni snack, nella stessa repo.
// Buon lavoro a tutte e a tutti!
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack6</title>
    <link rel="stylesheet" href="./css/snack6-style.css">
</head>
<body>
    <main>
        <section class="bg-gray">
            <ul>
                <?php foreach($db ['teachers'] as $teacher) {?>
                    <li>
                        <?php echo $teacher['name'] . ' ' .  $teacher['lastname'] ?>
                    </li>
                <?php }?>
            </ul>
        </section>
        <section class="bg-green">
            <ul>
                <?php foreach($db ['pm'] as $pm) {?>
                    <li>
                        <?php echo $pm['name'] . ' ' . $pm['lastname'] ?>
                    </li>
                <?php }?>
            </ul>
        </section>

    </main>
</body>
</html>