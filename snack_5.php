<?php 
// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$paragraph ='Qui come in altre parti del poema Enea non è altro che uno strumento del Fato, appartiene cioè ad una volontà molto più grande e forte di lui a fronte della quale non può fare resistenza.
E’ tutto subordinato all’ordine di Giove di partire perché in gioco c’è un futuro di gloria e grandezza per l’intera stirpe che discenderà da Enea; i sentimenti di una donna, per quanto regina, possono poco contro le forze che determinano l’intera storia dell’umanità.
Di fronte a Didone il personaggio di Enea sembra quasi annullarsi. Egli appare incapace di prendere decisioni autonome e di provare sentimenti forti e personali, come quelli che invece prova e manifesta Didone. L’affetto che prova per la Regina è chiuso dentro di lui, nascosto dalla fretta con cui egli organizza uomini e navi per una partenza che sembra più una fuga.';

$splittedPara = explode('.', $paragraph);

?>

<ul>
    <?php foreach ($splittedPara as $sentence)   { ?>
        <li>
            <p>
                <?php echo $sentence; ?>
            </p>
        </li>
    <?php } ?>
</ul>