<?php

class Calc{
    public $operator;
    public $num1;
    public $num2;


    public function __construct(int $num1, int $num2, string $operator){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }


    public function calculator(){
        switch ($this->operator) {
            case '+':
            $result = $this->num1 + $this->num2;
            return $result;             
            break;
        case '-':
            $result = $this->num1 - $this->num2;
            return $result;             
            break;
        case '/':    
                $result = $this->num1 / $this->num2;
                return $result;             
                break;
        case '*':    
                $result = $this->num1 * $this->num2;
                return $result;             
                break;

        }
    }

}

?>