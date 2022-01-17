<?php
/*
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
*/

class Movie {
    public $title, $subtitle, $director;

    public function __construct($title, $subtitle = "", $director = "") {
        $this -> title = $title;
        $this -> subtitle = $subtitle;
        $this -> director = $director;
    }

    public function getFullTitle() {
        
        if ($this -> subtitle) {
            return "{$this -> title}: {$this -> subtitle}";
        }

        return $this -> title;
    }

    public function __toString() {

        if ($this -> director) {
            return $this -> getFullTitle() . " | " . $this -> director;
        }

        return $this -> getFullTitle() . " | ???";
    }
}

$movie_one = new Movie("Interstellar");
$movie_two = new Movie("The Matrix", "1999", "Andy e Larry Wachowski");
$movie_three = new Movie("Kill Bill", "Volume 1");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo $movie_one . "<br>";
        echo $movie_two . "<br>";
        echo $movie_three . "<br>";

    ?>
</body>
</html>