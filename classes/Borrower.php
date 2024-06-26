<?php
/* A compléter */
class Borrower extends Person
{
    // propriété contenant un tableau des documents empruntés par le client 
    private int $items_borrowed;
    //propriété contenant la date de retour la plus proche d'un document emprunté par le client 
    private ?datetime $closest_due_date;
   // autre propriétés a rajouter ????
    public function __construct (
        string $firstname, 
        string $lastname, 
        ?DateTime $date_of_birth,
        string $gender,
        string $occupation,
        string $email,
        string $phone,
        string $city,
        string $city_code,
        int $items_borrowed, 
        ?datetime $closest_due_date
        
        ){

            parent::__construct(
                $firstname, 
                $lastname, 
                $date_of_birth,
                $gender,
                $occupation,
                $email,
                $phone,
                $city,
                $city_code
            );

            $this->items_borrowed = $items_borrowed;
            $this->closest_due_date = $closest_due_date;
            

    }

  //Liste des  Getters (Accesseurs) pour retourner les propriétés 
    public function getItemsBorrowed(): int {
        return $this->items_borrowed;
    }
    public function getFirstDueDate(): ?DateTime {
        return $this->closest_due_date;
    }
    
    //Liste des Getters (mutateurs) pour modifier les propriétés 
    /* Ajoute un nouveau document à la fin du tableau liste de documents */
    public function setItemsBorrowed(int $items_borrowed):void {
        $this->items_borrowed[] = $items_borrowed;
    }


    // Fonction dispaly des élements de la classe parent 

    public function borrowerDisplay(): string {
    
        // à completer 
        
        $output = "";
        
    
        return $output;
    
    }

}