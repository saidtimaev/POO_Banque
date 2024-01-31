<?php

Class Acteur extends Personne
{
    private array $castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];
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

    public function addCasting(Casting $casting)
    {
        $this->castings[] =  $casting; 
    }

    public function afficherFilmsActeur()
    {
        $result = "<h1>L'acteur $this a joué dans les films suivants :</h1><br><ul>";

        foreach($this->castings as $casting)
        {
            $result .= "<li>".$casting->getFilm()."</ul><br>";
        }

        return $result;

    }
}