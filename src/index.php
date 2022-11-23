<?php
require 'vendor/autoload.php';

use Src\Features\CalculationManager;

$number1 = (int)readline("Enter the first number: ");
$number2 = (int)readline("Enter the second number: ");
$operation = (string)readline(" Choose operation: \n 1 - Addition \n 2 - Multiplication \n 3 - Substraction \n 4 - Division \n");

$calculationManager = new CalculationManager($number1, $number2, $operation);
$result = $calculationManager->calculate();

echo $result;
