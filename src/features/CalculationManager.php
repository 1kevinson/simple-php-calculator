<?php

namespace Src\Features;

use Monolog\Logger;
use Config\MonoLogger;

class CalculationManager
{
    public function __construct(
        private readonly int $number1,
        private readonly int $number2,
        private readonly int $operation
    ){}

    public function calculate(): string
    {
        $basicCalculator = new BasicCalculator();
        $logger = new MonoLogger(new Logger('operations'));

        $operationResult = match ($this->operation) {
            1 => $basicCalculator->addition($this->number1, $this->number2),
            2 => $basicCalculator->multiplication($this->number1, $this->number2),
            3 => $basicCalculator->substraction($this->number1, $this->number2),
            4 => $basicCalculator->division($this->number1, $this->number2),
            default => 'Wrong number selected, please retry...'
        };

        $logger->info($operationResult, $this->operation);
        return strval($operationResult);
    }
}