<?php

class Movie
{
   private $title, $year, $genre, $duration;

   public function __construct(string $_title, int $_year) {
      $this->year = $_year;
      $this->title = $_title;
   }

   public function setGenre(string $_genre) {
      $this->genre = $_genre;
      return $this;
   }

   public function setDuration(int $_duration) {
      $this->duration = $_duration;
      return $this;
   }

   public function getMovieDetails() {
      return '<h3>' .  $this->title . '</h3><ul><li>Year: ' . $this->year . '</li><li>Genre: '. $this->genre . '</li><li>Duration: '. $this->duration . ' min</li></ul>';
   }
}

/* movie 1 */
$movie1 = new Movie('The Matrix', 1999);
$movie1->setGenre('Action')->setDuration(135);
echo $movie1->getMovieDetails();


/* movie 2 */
$movie2 = new Movie('The Matrix Reloaded', 2003);
$movie2->setGenre('Action')->setDuration(138);
echo $movie2->getMovieDetails();