<?php

require_once 'Ember.php';

class Tanulo extends Ember 
{
    private $tagozat;
    private $erdemjegyek;

    public function __construct($nev, $nem, $szuletesi_ev, $tagozat, $erdemjegyek = [])
    {
        parent::__construct($nev, $nem, $szuletesi_ev);
        $this->tagozat = $tagozat;
        $this->erdemjegyek = $erdemjegyek;
    }

    public function __toString()
    {
        $adatok = "Neve: ". $this->nev
                ."<br>Neme: ". $this->nem
                ."<br>Születési éve: ". $this->szuletesi_ev
                ."<br>Tagozat: ". $this->tagozat
                ."<br>Érdemjegyei:";

        foreach($this->erdemjegyek as $v) {
            $adatok .= " ". $v;
        }
        return $adatok;
    }

    public function atlag()
    {
        return array_sum($this->erdemjegyek) / count($this->erdemjegyek);
    }
}

?>