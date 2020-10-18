<?php

require_once 'Tanulo.php';
require_once 'Tanar.php';

class Factory
{
    private static $keresztnevek = [
        ["Bence","Máté", "Levente", "Dominik", "Marcell", "Noel"],
        ["Hanna", "Anna", "Zoé", "Luca", "Léna", "Emma"]
    ];
    private static $vezeteknevek = ["Nagy", "Kovács", "Tóth", "Szabó", "Horváth", "Varga", "Kiss", "Molnár", "Németh", "Farkas"];

    public function emberFactory($szerep)
    {
        $nem = random_int(1, 2);
        $keresztnev = self::$keresztnevek[$nem-1][random_int(0, 5)];
        $vezeteknev = self::$vezeteknevek[random_int(0, 9)];

        if($szerep == "tanulo"){
            $szuletesi_ev = random_int(1995, 2001);
            $tagozat = random_int(0, 1) ? "Nappali" : "Esti";

            $jegyek = [];

            for ($i = 0; $i < 5; $i++){
                $jegyek[] = random_int(1, 5);
            }
            
            return new Tanulo($vezeteknev ." ". $keresztnev, $nem, $szuletesi_ev, $tagozat, $jegyek);
        }
        else if ($szerep == "tanar"){
            $szuletesi_ev = random_int(1960, 1995);
            $csaladi_allapot = random_int(0, 1) ? "Házas" : "Egyedülálló";

            return new Tanar($vezeteknev ." ". $keresztnev, $nem, $szuletesi_ev, $csaladi_allapot);
        }
    }
}

?>