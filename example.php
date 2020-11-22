<?php

/* Example */

require_once './src/Core.php';

use Araripe as Araripe;

$firstNumber = Araripe\Core::input("Enter the first number: ");

$secondNumber = Araripe\Core::input("Enter the second number: ");

echo $firstNumber + $secondNumber;




