<?php

class Calculator
{

    private $value1;
    private $operator;
    private $value2;

    public function __construct($value1, $value2, $operator)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->operator = $operator;
    }

    public function convert()
    {
        return $this->calculate();

    }

    private function calculate()
    {
        switch ($this->operator) {
            case 'plus':
                return $this->value1 + $this->value2;
                break;
            case 'minus':
                return $this->value1 - $this->value2;
                break;
            case 'divide':
                if ($this->value2 == 0) {
                    return "err division by 0";
                }
                return $this->value1 / $this->value2;
                break;
            case 'multiple':
                return $this->value1 * $this->value2;
                break;
        }

    }
}