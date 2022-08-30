<!-- 
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

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

for ($i=0; $i < count($partite) ; $i++) { 
    echo ($partite[$i]["casa"]);
    echo ($partite[$i]["ospite"]);
    echo($partite[$i]["punti-casa"]);
    echo($partite[$i]["punti-ospite"]);

}

?>


