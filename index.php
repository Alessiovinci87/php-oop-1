<?php

class Movie {
    public $title;
    public $director;
    public $year;

    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function printInfo() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Anno: " . $this->year . "<br>";
    }
}

$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972);
$movie2 = new Movie("Forrest Gump", "Robert Zemeckis", 1994);

echo "Film 1:<br>";
$movie1->printInfo();
echo "<br>";

echo "Film 2:<br>";
$movie2->printInfo();
?>
