<?php

function numbersCompare($firstNumber = 12, $secondNumber = 13){
      if (is_int($firstNumber) && is_int($secondNumber)) {
            if ($firstNumber < $secondNumber) {
                  $message = 'le premier nombre est plus petit.';
            } elseif ($firstNumber == $secondNumber) {
                  $message = 'Les deux nombres sont identiques';
            } else if ($firstNumber > $secondNumber) {
                  $message = 'Le premier nombre est plus grand';
            }
      } else {
            $message = 'rentre un nombre connard';
      }
      return $message;
}
echo numbersCompare(20, 25);
?>