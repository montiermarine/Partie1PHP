<?php

function young($age = 6, $gender = "Homme"){
    if ($age >= 18 && $gender == "Homme"){
        echo "Vous êtes un homme et vous êtes majeur";
    }else if ($age < 18 && $gender == "Homme"){
        echo "Vous êtes un homme et vous êtes mineur";
    }else if ($age >= 18 && $gender != "Homme"){
        echo "Vous êtes une femme et vous êtes majeure";
    }else{
        echo "Vous êtes une femme et vous êtes mineure";
    };
}
young ();
?>