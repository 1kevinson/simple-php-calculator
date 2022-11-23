<?php

namespace Config;

use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class MonoLogger
{
    private Logger $logger;

    private function setup(): void
    {
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log'));
        $this->logger->pushHandler(new FirePHPHandler());
    }

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $this->setup();
    }

    public function info(string $operationResult, int $operationNumber): void
    {
        $this->logger->info('Operation selected: ' . $this->getLogOperationSelected($operationNumber) . '. The result -> ' . $operationResult);
    }

    private function getLogOperationSelected(int $number): string
    {
        return match ($number) {
            1 => 'ADDITION',
            2 => 'MULTIPLICATION',
            3 => 'SUBSTRACTION',
            4 => 'DIVISION',
            default => 'Wrong number selected, please retry...'
        };
    }
}