<?php

abstract class Ember 
{
    protected $nev;
    protected $nem;
    protected $szuletesi_ev;

    public function __construct($nev, $nem, $szuletesi_ev)
    {
        $this->nev = $nev;
        $this->nem = $nem;
        $this->szuletesi_ev = $szuletesi_ev;
    }
    
    abstract public function __toString();

    public function getNev()
    {
        return $this->nev;
    }
}
?>