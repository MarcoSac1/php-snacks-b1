<?php
require_once __DIR__ .  '/Utente.php';
require_once __DIR__ .  '/Membership.php';
require_once __DIR__ .  '/PremiumUser.php';

$user = new User('franco', 'ciccio', 'sonostanco@gmail.com');
$premiumUser = new PremiumUser('antonia', 'salvini', 'sfgdsf@gmail.com', new Membership('23nj234ij'));
$secondPremiumUser = new PremiumUser('algaa', 'antani', 'dwdwrescritf@gmail.com', new Membership('876vcv98vb'));


var_dump($user, $premiumUser, $secondPremiumUser );
var_dump($user -> getDiscount(), $premiumUser -> getDiscount(), $secondPremiumUser -> getDiscount());


?>