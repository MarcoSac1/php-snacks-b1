<?php 
// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$randomNumbers =[ ];

while (count($randomNumbers) < 15) {
    $newRandomNumber = rand(1,100);

    if (! in_array($newRandomNumber, $randomNumbers)) {
    $randomNumbers[] = $newRandomNumber;
    }
}
?>


<ul>
    <?php foreach ($randomNumbers as $number)  { ?>
        <li>
            <?php echo $number; ?>
        </li>
    <?php } ?>
</ul>