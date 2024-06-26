<?php


class LibraryItem {

    private     string $reference;
    private     string $title;
    private     string $author;
    private     string $publisher;
    private     int    $isbn;
    private     string $type = "Papier"; // Default support for testing (papier or multimedia)
    private     string $description;
    private     ?DateTime $release_date;
    private     string $status = "in_house";
    private     bool $is_borrowable = true;
    protected   ?DateTime  $loan_date = null;
    protected   ?DateTime  $return_date = null; 


    public function __construct(

        string $reference,
        string $title,
        string $author,
        string $publisher,
        int    $isbn,
        string $description,
        ?DateTime  $release_date,
        string $type,
        string $status,
        bool $is_borrowable     = true,
        ?DateTime  $loan_date   = null,
        ?DateTime  $return_date = null ) {

        $this->reference      = $reference;
        $this->title          = $title;
        $this->author         = $author; 
        $this->publisher      = $publisher;
        $this->isbn           = $isbn;
        $this->type           = $type;
        $this->description    = $description;
        $this->release_date   = $release_date;
        $this->status         = $status;
        $this->is_borrowable  = $is_borrowable;
        $this->loan_date      = $loan_date;
        $this->return_date    = $return_date;
    }
//Liste des  Getters (Accesseurs) pour retourner les propriétés 

    public function getReference(): string      { return $this->reference;     }
    public function getTitle(): string          { return $this->title;         }
    public function getAuthor(): string         { return $this->author;        }
    public function getPublisher(): string      { return $this->publisher;     }
    public function getIsbn(): int              { return $this->isbn;          }
    public function getType(): string           { return $this->type;          }
    public function getDescription(): string    { return $this->description;   }
    public function getReleaseDate(): ?DateTime { return $this->release_date;  }
    public function getStatus(): string         { return $this->status;        }
    public function getIsBorrowable(): bool     { return $this->is_borrowable; }
    public function getLoanDate(): ?DateTime    { return $this->loan_date;     }
    public function getReturnDate(): ?DateTime  { return $this->return_date;   }


//Liste des Setters (mutateurs) pour modifier les propriétés 
    public function setReference(string $reference): void         { $this->reference     = $reference;     }
    public function setTitle(string $title): void                 { $this->title         = $title;         }
    public function setAuthor(string $author): void               {  $this->author       = $author;        }
    public function setPublisher(string $publisher): void         { $this->publisher     = $publisher;     }
    public function setIsbn(int $isbn): void                      { $this->isbn          = $isbn;          }
    public function setType(string $type): void                   { $this->type          = $type;          }
    public function setDescription(string $description): void     { $this->description   = $description;   }
    public function setReleaseDate(?DateTime $release_date): void { $this->release_date  = $release_date;  }
    public function setStatus(string $status): void               { $this->status        = $status;        }
    public function setIsBorrowable(bool $is_borrowable): void    { $this->is_borrowable = $is_borrowable; }
    public function setLoanDate(?DateTime $loan_date) : void      { $this->loan_date     = $loan_date;     }
    public function setReturnDate(?DateTime $return_date): void   { $this->return_date   = $return_date;   }
   

    // Fonction dispaly des élements de la classe parent 
  
    public function itemDisplay(): string {
        $output = "";
        $output .= "Type: " . $this->type . "\n";
        $output .= "Reference: " . $this->reference . "\n";
        $output .= "Title: " . $this->title . "\n";
        $output .= "Author: " . $this->author . "\n";   
        $output .= "ISBN: " . $this->isbn. "\n";
    
        $output .= "Publisher: " . $this->publisher . "\n";
        $output .= "Published Date: " . $this->release_date->format('d-m-Y') . "\n";
        $output .= "Description: " . $this->description . "\n";
        $output .= "Is Borrowable: " . ($this->is_borrowable ? "Oui" : "Consultation sur place") . "\n";
        $output .= "Status: " . $this->status . "\n";
      
        if ($this->status == "borrowed") {
            $output .= "\nLoan Date: " . ($this->loan_date ? $this->loan_date->format('d-m-Y') : "N/A") .
                       "\nReturn Date: " . ($this->return_date ? $this->return_date->format('d-m-Y') : "N/A");
        }
        
        

        return $output;
    }
}


