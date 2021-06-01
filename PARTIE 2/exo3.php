<?php

$age = 33;
$gender = "Femme";

if ($age >= 18 && $gender == "Femme"){
    echo "Vous êtes une Femme et vous êtes Majeure";
}else if($age > 18 && $gender == "Femme") {
    echo "Vous êtes une Femme et vous êtes Mineure";

}else if ($age >=18 && $gender == "Homme"){
    echo "Vous êtes un Homme et vous êtes Majeure";
}else{
    echo "Vous êtes un Homme et vous êtes Mineure";
};
?>