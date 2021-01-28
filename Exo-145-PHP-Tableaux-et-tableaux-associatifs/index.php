<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo $fruits;

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is ".$age." years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" . $x . ", Value=" . $y ;
}



//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
echo sort($colors);


// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo rsort($colors);





