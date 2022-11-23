<?php

namespace Src\Contracts;

interface BasicOperations
{
    public function addition(int $number1, int $number2): int;

    public function multiplication(int $number1, int $number2): int;

    public function substraction(int $number1, int $number2): int;

    public function division(int $number1, int $number2): float;
}