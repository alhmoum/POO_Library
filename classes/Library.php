<?php

class Library
{

    private string $name;
    private string $city;
    private string $city_code;
    private string $policy;

    public function __construct(string $name, string $city, string $city_code, string $policy) {

        $this->name      = $name;
        $this->city      = $city;
        $this->city_code = $city_code;
        $this->policy    = $policy;
       
    }

    //Liste des  Getters (Accesseurs) pour retourner les propriétés 

    public function getName(): string      { return $this->name; }
    public function getCity(): string      { return $this->city; }
    public function getCityCode(): string  { return $this->city_code; }
    public function getPolicy(): string    {return $this->policy;}

    //Liste des Setters (mutateurs) pour modifier les propriétés  

    public function setName(string $name): void {$this->name = $name;}
    public function setCity(string $city): void {$this->city = $city;}
    public function setCityCode(string $city_code): void {$this->city_code = $city_code;}
    public function setPolicy(string $policy): void {$this->policy = $policy;}
}