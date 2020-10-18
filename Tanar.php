<?php

require_once 'Ember.php';

class Tanar extends Ember 
{
    private $csaladi_allapot;

    public function __construct($nev, $nem, $szuletesi_ev, $csaladi_allapot)
    {
        parent::__construct($nev, $nem, $szuletesi_ev);
        $this->csaladi_allapot = $csaladi_allapot;
    }

    public function __toString()
    {
        $adatok = "Neve: ". $this->nev
                ."<br>Neme: ". $this->nem
                ."<br>Születési éve: ". $this->szuletesi_ev
                ."<br>Családi állapot: ". $this->csaladi_allapot;
        return $adatok;
    }
}

?>