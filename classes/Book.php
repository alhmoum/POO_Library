<?php 


class Book extends LibraryItem
 {

     private string $genre;
     private int    $number_of_pages; 
     private string $synopsis;


     public function __construct(
        string    $reference,
        string    $title,
        string    $author,
        string    $publisher,
        int       $isbn,
        string    $description,
        ?DateTime $release_date,
        string    $type,
        string    $status,
        bool      $is_borrowable,
        ?DateTime $loan_date,
        ?DateTime $return_date,
        string    $genre,
        int       $number_of_pages,
        string    $synopsis
    ) {
            parent::__construct(
                $reference,
                $title,
                $author,
                $publisher,
                $isbn,
                $description,
                $release_date,
                $type,
                $status,
                $is_borrowable  = true,
                $loan_date      = null,
                $return_date    = null
            
            );
        $this->genre = $genre;
        $this->number_of_pages = $number_of_pages;
        $this->synopsis = $synopsis;
    }

   
     //Liste des  Getters (Accesseurs) pour retourner les propriétés 
     public function getGenre(){ return $this->genre; }
     public function getNumberOfPages(){ return $this->number_of_pages; }
     public function getSynopsis(){ return $this->synopsis; }

      //Liste des Setters (mutateurs) pour modifier les propriétés 
     public function setGenre(string $genre) { return $this->genre = $genre; }
     public function setNumberOfPages(int $number_of_pages) { return $this->number_of_pages = $number_of_pages; }
     public function setSynopsis(string $synopsis) { return $this->synopsis = $synopsis; }

    // Fonction dispaly des élements de la classe enfant avec rappel de la classe parent 

     public function bookDisplay(): string {
        $output = parent::ItemDisplay();
        $output .= "Genre: " . $this->genre . "\n";
        $output .= "Number of Pages: " . $this->number_of_pages . "\n";
        $output .= "Synopsis: " . $this->synopsis . "\n";
        return $output;
    }
   
}


