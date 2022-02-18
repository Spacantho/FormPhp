<?php
echo htmlspecialchars("Bonjour, ".$_POST['nom']);
echo("<br/>");


$date_naissance = $_POST['age'];
$aujourdhui = date("Y-m-d");
$diff = date_diff(date_create($date_naissance), date_create($aujourdhui));
$age = $diff->format('%y');

echo 'Tu as '.$diff->format('%y').' ans';


if ($age < 18){
    header('Location: https://fr.wikipedia.org/wiki/Meurtre_de_Junko_Furuta#:~:text=Le%20meurtre%20de%20Junko%20Furuta,%2C%20viol%C3%A9e%2C%20tortur%C3%A9e%20et%20assassin%C3%A9e.');
} else {
    header('Location: https://pointerpointer.com/');
}
?>