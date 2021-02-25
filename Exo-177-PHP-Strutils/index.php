<?php
require "./classe/StrUtils.php";

$str = new StrUtils('je veux des vacances au soleil!');
echo $str . "<br>";
$str->bold();
echo $str . "<br>";
$str->italic();
echo $str . "<br>";
$str->underline();
echo $str . "<br>";
$str->capitalize();
echo $str . "<br>";

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

