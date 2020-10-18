<?php

class Csoport
{
    private $vezeto;
    private $diakok;

    public function __construct($vezeto = null, $diakok = [])
    {
        $this->vezeto = $vezeto;
        $this->diakok = $diakok;
    }

    public function getDiak($num)
    {
        return $this->diakok[$num];
    }

    public function addDiak($diak)
    {
        $this->diakok[] = $diak;
    }

    public function setVezeto ($vezeto)
    {
        $this->vezeto = $vezeto;
    }
    
    /*public function getVezeto ($vezeto)
    {
        $this->vezeto = $vezeto;
    }

    public function setDiakok ($diakok)
    {
        $this->diakok = $diakok;
    }
    
    public function getDiakok ($diakok)
    {
        $this->diakok = $diakok;
    }*/

    public function csoportAtlag()
    {
        $sum = 0;
        foreach ($this->diakok as $d){
            $sum += $d->atlag();
        }
        return $sum / count($this->diakok);
    }

    public function __toString()
    {
        $nevsor = $this->vezeto->getNev() ."<br>";

        $diak_nevek = [];
        foreach ($this->diakok as $d){
            $diak_nevek[] = $d->getNev();
        }
        sort($diak_nevek);
        
        foreach ($diak_nevek as $d){
            $nevsor .= "<br>". $d;
        }
        return $nevsor;
    }
}

?>