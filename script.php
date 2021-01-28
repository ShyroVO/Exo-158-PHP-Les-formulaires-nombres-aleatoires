<?php
$x = strip_tags(trim($_GET['x']));
$y = strip_tags(trim($_GET['y'])) ;

echo "Nombre random entre " . $x . " et " . $y . ": <br><br>";

if ($x === $y){
    echo "Les chiffres sont égaux";
}
else if ($x < $y){
    echo rand($x, $y);
}
else {
    echo rand($y, $x);
}
?>