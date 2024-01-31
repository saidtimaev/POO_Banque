<?php

Class Personne
{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    
    
    public function getSexe(): string
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }


    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function getPrenom(): string
    {
        return $this->prenom;
    }
 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

 
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function _toString()
    {
        return $this->nom." ".$this->prenom;
    }
}
