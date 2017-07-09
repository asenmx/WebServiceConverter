<?php

class Length
{

    private $from;
    private $to;
    private $value;

    public function __construct($from, $to, $value)
    {
        $this->from = $from;
        $this->to = $to;
        $this->value = $value;
    }

    public function convert()
    {
        return $this->calculate();

    }

    private function calculate()
    {
        $val = $this->convertToCentimeter();
        switch ($this->to) {
            case 'Centimeter':
                return (double)$val;
                break;
            case 'Meter':
                return (double)$val * 0.01;
                break;
            case 'Feet':
                return (double)$val * 0.032808398;
                break;
            case 'Inch':
                return (double)$val * 0.39370078;
                break;
            case 'Mile':
                return (double)$val * 0.0000062137119;
                break;
            case 'Yard':
                return (double)$val * 0.010936132;
                break;

        }
    }

    private function convertToCentimeter()
    {
        switch ($this->from) {
            case 'Centimeter':
                return (double)$this->value;
                break;
            case 'Meter':
                return (double)$this->value * 100;
                break;
            case 'Feet':
                return (double)$this->value * 30.48;
                break;
            case 'Inch':
                return (double)$this->value * 2.54;
                break;
            case 'Mile':
                return (double)$this->value * 160934.4;
                break;
            case 'Yard':
                return (double)$this->value * 91.44;
                break;


        }
    }
}