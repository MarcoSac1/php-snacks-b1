<?php 
// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
//  Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<h1> I nostri post:</h1>

<?php foreach($posts as $date => $postsPerDate) { ?>
    <h2>
        Lista dei post pubblicati in data : <?php echo $date; ?>
    </h2>
    <ul>
        <?php foreach($postsPerDate as $posts) { ?>
            <li>
                <h3>
                    <?php echo  $posts['title']; ?>
                </h3>
                <h4>
                    Published by: <?php echo  $posts['author']; ?>
                </h4>
                <p>
                    <?php echo  $posts['text']; ?>
                </p>
            </li>
        <?php } ?>
    </ul>
<?php } ?>
