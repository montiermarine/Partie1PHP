<?php
// On crée notre array $coordonnees
$departements = [
    02 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Nord Pas de Calais",
    80 => "Somme"];

foreach ($departements as $elements => $value) {
    echo $value." ".$elements." " ;
}   
    
?>