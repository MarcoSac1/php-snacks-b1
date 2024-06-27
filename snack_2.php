<?php 
// <!-- Snack 2
// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
    $message ='';

    if (empty($_GET['name']) || empty($_GET['age'])  || empty($_GET['mail'])) {
        $message ='Errore';
    }elseif(strlen($_GET['name']) < 3){
        $message ='Accesso Negato';
    }elseif(!str_contains($_GET['mail'], '@') || !str_contains($_GET['mail'], '.')){
        $message ='Accesso Negato';
    }elseif(!is_numeric($_GET['age'])){
        $message ='Accesso Negato';
    }else{
        $message ='Accesso Riuscito!';
    }
    echo $message;
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
        <form action="./snack_2.php" method='GET'>
            <div>
                <label for="name">name</label>
                <input type="text" name='name' id='name'>
            </div>
            <div>
                <label for="mail">email</label>
                <input type="text" name='mail' id='mail'>
            </div>
            <div>
                <label for="number">number</label>
                <input type="text" name='number' id='number'>
            </div>
            <div>
                <button type='submit'>send</button>
                <!-- <button type="reset">delete</button> -->
            </div>
        </form>
    </main>
</body>
</html> 