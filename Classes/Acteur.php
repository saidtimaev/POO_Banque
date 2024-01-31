<?php

Class Acteur extends Personne
{
    private array $castingsRealises;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castingsRealises = [];
    }




    public function getCastingsRealises()
    {
        return $this->castings;
    }

    public function setCastingsRealises($castingsRealises)
    {
        $this->castingsRealises = $castingsRealises;

        return $this;
    }

        
    public function _toString()
    {
        return $this->prenom." ".$this->nom;
    }

}