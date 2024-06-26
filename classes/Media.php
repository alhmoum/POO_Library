<?php
/* A compléter */
class Media extends LibraryItem
{
    private  string $category; //(CD - DVD)
    private  string $content;  //(audio - video - mixed)
    private  int    $duration; //(length in minutes)
    
    public function __construct(string $category, string $content,  int $duration)
    {
        echo 'Appel du constructeur. \n';
        $this->content = $content;
        $this->category = $category;
        $this->duration = $duration;
           
    }
    
    //Liste des  Getters (Accesseurs) pour retourner les propriétés 

    //Liste des Setters (mutateurs) pour modifier les propriétés 


     // Fonction dispaly des élements de la classe enfant avec rappel de la classe parent 
    public function mediaDisplay(): string {
        
        // à completer 
        
        $output = "";
        

        return $output;

    }

}