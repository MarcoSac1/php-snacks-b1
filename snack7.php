<?php 
// Snack 7
// Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
// Questo array dovra' essere inserito in un file separato, da importare.
// Stampare Nome, Cognome e la media dei voti di ogni alunno.

include __DIR__. '/array.php';
?>


    <ul >
    <?php foreach($alunni as $studenti) { ?>
        <li><?php echo $studenti['nome']. ' ' . $studenti['cognome']; ?> - <?php echo array_sum($alunni['voto']); ?></li>
    <?php } ?>
</ul>
