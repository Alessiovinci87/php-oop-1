<?php
class Movie {
    public $title;
    public $director;
    public $year;
    public $genres; 

    public function __construct($title, $director, $year, $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres; 
    }

    public function printInfo() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Anno: " . $this->year . "<br>";
        echo "Generi: " . implode(", ", $this->genres) . "<br>"; 
    }
}

$genres1 = ["Drammatico", "Crime", "Mafia"];
$genres2 = ["Drammatico", "Commedia", "Romantico"];

$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, $genres1);
$movie2 = new Movie("Forrest Gump", "Robert Zemeckis", 1994, $genres2);

echo "Film 1:<br>";
$movie1->printInfo();
echo "<br>";

echo "Film 2:<br>";
$movie2->printInfo();
?>
