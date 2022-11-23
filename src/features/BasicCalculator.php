<?php

namespace Src\Features;

use ArithmeticError;
use DivisionByZeroError;
use Src\Contracts\BasicOperations;

class BasicCalculator implements BasicOperations
{

    public function addition(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }

    public function multiplication(int $number1, int $number2): int
    {
        return $number1 * $number2;
    }

    public function substraction(int $number1, int $number2): int
    {
        if ($number1 < $number2) throw new ArithmeticError('Number 1 must be greater than number 2');
        return $number1 - $number2;
    }

    public function division(int $number1, int $number2): float
    {
        if ($number2 = 0) throw new DivisionByZeroError();
        return $number1 / $number2;
    }
}