<?php

class Computer
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
        $val = $this->convertToByte();
        switch ($this->to) {
            case 'Byte':
                return (double)$val;
                break;
            case 'Kilobyte':
                return (double)$val / 1000;
                break;
            case 'Megabyte':
                return (double)$val / 1000 / 1000;
                break;
            case 'Gigabyte':
                return (double)$val / 1000 / 1000 / 1000;
                break;
            case 'Terabyte':
                return (double)$val / 1000 / 1000 / 1000 / 1000;
                break;
            case 'Petabyte':
                return (double)$val / 1000 / 1000 / 1000 / 1000 / 1000;
                break;
            case 'Exabyte':
                return (double)$val / 1000 / 1000 / 1000 / 1000 / 1000 / 1000;
                break;
            case 'Zetabyte':
                return (double)$val / 1000 / 1000 / 1000 / 1000 / 1000 / 1000 / 1000;
                break;
        }
    }

    private function convertToByte()
    {
        switch ($this->from) {

            case 'Byte':
                return (double)$this->value;
                break;
            case 'Kilobyte':
                return (double)$this->value * 1000;
                break;
            case 'Megabyte':
                return (double)$this->value * 1000 * 1000;
                break;
            case 'Gigabyte':
                return (double)$this->value * 1000 * 1000 * 1000;
                break;
            case 'Terabyte':
                return (double)$this->value * 1000 * 1000 * 1000 * 1000;
                break;
            case 'Petabyte':
                return (double)$this->value * 1000 * 1000 * 1000 * 1000 * 1000;
                break;
            case 'Exabyte':
                return (double)$this->value * 1000 * 1000 * 1000 * 1000 * 1000 * 1000;
                break;
            case 'Zetabyte':
                return (double)$this->value * 1000 * 1000 * 1000 * 1000 * 1000 * 1000 * 1000;
                break;


        }
    }
}