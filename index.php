<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
?>

<form method="get" action="script.php">
    <label for="x">X:</label>
    <input type="number" name="x" id="x">
    <label for="y">Y:</label>
    <input type="number" name="y" id="y">
    <input type="submit" value="submit">
</form>
