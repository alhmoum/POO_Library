<?php

class Person
{
    
    private string $firstname;
    private string $lastname;
    private ?DateTime $date_of_birth;
    private string $gender; //(male -female - neuter)
    private string $occupation;
    private string $email;
    private string $phone;
    private string $city;
    private string $city_code;

   

    public function __construct (
        string $firstname, 
        string $lastname, 
        ?DateTime $date_of_birth,
        string $gender,
        string $occupation,
        string $email,
        string $phone,
        string $city,
        string $city_code ){

            $this->firstname       = $firstname;
            $this->lastname        = $lastname;
            $this->date_of_birth   = $date_of_birth;
            $this->gender          = $gender;
            $this->occupation      = $occupation;
            $this->email           = $email;
            $this->phone           = $phone;
            $this->city            = $city;
            $this->city_code       = $city_code;
            
    }

  //Liste des  Getters (Accesseurs) pour retourner les propriétés 
    public function getFirstName(): string      { return $this->firstname;     }
    public function getLastName(): string       { return $this->lastname;      }
    public function getBbirthdate(): ?DateTime  { return $this->date_of_birth; }
    public function getGender(): string         { return $this->gender;        }
    public function getOccupation(): string     { return $this->occupation;    }
    public function getemail(): string          { return $this->email;         }
    public function getPhone(): string          { return $this->phone;         }
    public function getCity(): string           { return $this->city;          }
    public function getCityCode(): string       { return $this->city_code;     }
    

    /* Liste des Setters pour modifier les propriétés */
    public function setFirstName(string $firstname): void            { $this->firstname       = $firstname;     }
    public function setLastName(string $lastname): void              { $this->lastname        = $lastname;      }
    public function setBirthdate(?DateTime $date_of_birth): void     { $this->date_of_birth   = $date_of_birth; }
    public function setGender(string $gender): void                  { $this->gender          = $gender;        }
    public function setOccupation(string $occupation): void          { $this->occupation      = $occupation;    }
    public function setEmail(string $email): void                    { $this->email           = $email;         }
    public function setPhone(string $phone): void                    { $this->phone           = $phone;         }
    public function setCity(string $city): void                      { $this->city            = $city;          }
    public function setCityCode(string $city_code): void             { $this->city_code       = $city_code;     }


  // Fonction dispaly des élements de la classe parent 

  public function PersonDisplay(): string {
   
   // à completer 
    
    $output = "";
    

    return $output;

  }



}