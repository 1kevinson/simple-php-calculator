<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Features\BasicCalculator;

final class BasicCalculatorTest extends TestCase
{
    private BasicCalculator $basicCalculator;

    public function setUp(): void
    {
        $this->basicCalculator = new BasicCalculator();
    }

    public function testShouldPerformOperationAdditionOnTwoNumbers(): void
    {
        $this->assertEquals(5, $this->basicCalculator->addition(2, 3));
    }

    public function testShouldPerformOperationMultiplicationOnTwoNumbers(): void
    {
        $this->assertThat(6, $this->equalTo($this->basicCalculator->multiplication(2, 3)));
    }

    public function testShouldPerformOperationSubstractionOnTwoNumbers(): void
    {
        $this->assertThat(18, $this->equalTo($this->basicCalculator->substraction(21, 3)));
    }

    public function testShouldThrowAnErrorIfHaveBadParametersSubstractionOnTwoNumbers(): void
    {
        $this->expectException(ArithmeticError::class);
        $this->expectExceptionMessage('Number 1 must be greater than number 2');
        $this->basicCalculator->substraction(2, 3);
    }

    public function testShouldPerformOperationDivisionOnTwoNumbers(): void
    {
        $this->assertThat(18, $this->equalTo($this->basicCalculator->substraction(21, 3)));
    }

    public function testShouldThrowAnErrorIfHaveBadParametersDivisionOnTwoNumbers(): void
    {
        $this->expectException(DivisionByZeroError::class);
        $this->expectExceptionMessage('Division by zero');
        $this->basicCalculator->division(5, 0);
    }
}