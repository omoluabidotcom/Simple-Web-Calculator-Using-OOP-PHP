<?php

class Calc{

    private $symbol;
    private $numberOne;
    private $numberTwo;

    public function __construct(int $numberOne, int $numberTwo, string $symbol) {

        $this->symbol = $symbol;
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    public function Calculate() {

        switch ($this->symbol) {
            case "add":
                $result = $this->numberOne + $this->numberTwo;
                return $result;
                break;

            case "sub":
                $result = $this->numberOne - $this->numberTwo;
                return $result;
                break;

            case "mul":
                $result = $this->numberOne * $this->numberTwo;
                return $result;
                break;

            case "div":
                $result = $this->numberOne / $this->numberTwo;
                return $result;
                break;
            
            default:
                echo 'Your option is not available now, check later';
                break;
        }
    }
}

?>