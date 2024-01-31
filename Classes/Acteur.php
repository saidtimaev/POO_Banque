<?php

Class Acteur extends Personne
{
    private array $filmsJoues;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->filmsJoues = [];
    }

    
    public function getFilmsJoues(): array
    {
        return $this->filmsJoues;
    }

    public function setFilmsJoues($filmsJoues)
    {
        $this->filmsJoues = $filmsJoues;

        return $this;
    }

    
    public function _toString()
    {
        return $this->prenom." ".$this->nom;
    }
}