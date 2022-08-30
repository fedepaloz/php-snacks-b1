<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”; -->



<?php

$mail= $_GET['mail'] ?? '';
$name= $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';


if (str_contains($mail,'@') & str_contains($mail,'.')) {
    echo 'accesso riuscito';
} elseif ((strlen($name) > 3)) {
echo 'accesso riuscito'; 
}
elseif ((is_numeric($age))) {
    echo 'accesso riuscito';
}
else {
    echo 'accesso negato';
}


  
?>




