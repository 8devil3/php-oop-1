<?php

class Movie
{
   private $title, $year, $genre, $duration, $yearWarning;

   public function __construct(string $_title, int $_year) {
      if ($_year > 1900 && $_year < 2022) {
         $this->year = $_year;
      } else {
         $this->yearWarning = '<em>Out of range 1900-2022!</em>';
      }
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
      return (
         '<h3>' .  $this->title . '</h3>
         <ul>
            <li>Year: ' . $this->year . $this->yearWarning . '</li>
            <li>Genre: '. $this->genre . '</li>
            <li>Duration: '. $this->duration . ' min</li>
         </ul><hr>'
      );
   }
}

/* movie 1 */
$movie_1 = new Movie('The Matrix', 1999);
$movie_1->setGenre('Action')->setDuration(135);
echo $movie_1->getMovieDetails();


/* movie 2 */
$movie_2 = new Movie('The Matrix Reloaded', 2003);
$movie_2->setGenre('Action')->setDuration(138);
echo $movie_2->getMovieDetails();


/* movie 3 */
$movie_3 = new Movie('The Matrix Revolutions', 2003);
$movie_3->setGenre('Action')->setDuration(129);
echo $movie_3->getMovieDetails();