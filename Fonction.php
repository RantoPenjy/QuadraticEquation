<?php

class Fonction{

    public $delta, $x1, $x2;

    public function __construct(int $a, int $b, int $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function delta(){
        $this->delta = pow($this->b,2) - 4 * $this->a * $this->c ;
        return $this->delta;
    }

    public function x1(){
        $this->x1 = (- $this->b + sqrt($this->delta)) / 2 * $this->a ;
        return $this->x1;
    }

    public function x2(){
        $this->x2 = (- $this->b - sqrt($this->delta)) / 2 * $this->a;
        return $this->x2;
    }

    public function x(){
        $this->x = - $this->b / 2 * $this->a ;
        return $this->x;
    }

    public function calculx(){
        if ($this->delta < 0) {

            echo "Pas de solution";

        }elseif ($this->delta == 0) {

            echo "x = ". $this->x();

        }else{
            echo "x1 = ". $this->x1() ;
            echo "<br>";
            echo "x2 = ". $this->x2() ;
        }
    }

}

 ?>
