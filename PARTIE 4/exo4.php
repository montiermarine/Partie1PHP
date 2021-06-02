<?php

function Number ( $firstnumber = 5 , $secondNumber = 9) {
    if ($firstnumber > $secondNumber) {
        echo "$firstnumber est plus grand que $secondNumber" ;
    }else if ($firstnumber < $secondNumber) {
        echo "$firstnumber est plus petit que $secondNumber";
    }else{
        echo "$firstnumber est égale à $secondNumber";
    };
}
Number ();
?>