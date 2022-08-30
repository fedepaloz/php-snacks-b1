
<?php

$partite = [
    ["casa" => "roma",
"ospite" => "lazio",
"punti-casa" => "20",
"punti-ospite" => "30"],

["casa" => "milano",
"ospite" => "bologna",
"punti-casa" => "10",
"punti-ospite" => "40"], 

["casa" => "napoli",
"ospite" => "venezia",
"punti-casa" => "50",
"punti-ospite" => "60"], 

["casa" => "genova",
"ospite" => "torino",
"punti-casa" => "10",
"punti-ospite" => "80"],

["casa" => "termoli",
"ospite" => "viterbo",
"punti-casa" => "20",
"punti-ospite" => "10"],
    
];

/* for ($i=0; $i < count($partite) ; $i++) { 
    echo ($partite[$i]["casa"]);
    echo ($partite[$i]["ospite"]);
    echo($partite[$i]["punti-casa"]);
    echo($partite[$i]["punti-ospite"]);

} */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($partite) ; $i++) : ?> 
        <li>
            <h1><?=$partite[$i]["casa"]?></h1>
            <h2>20</h2>
            <h1>lazio</h1>
            <h2>10</h2>
         
        </li>
    <?php endfor; ?> 
    </ul>
</body>
</html>

