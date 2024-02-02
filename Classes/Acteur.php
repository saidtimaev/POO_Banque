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

        $dates = [];
        foreach ($this->castings as $key => $casting)
        {
            $dates[$key] = $casting->getFilm()->getDateSortie()->format('Y-m-d');
        }

        array_multisort($dates, SORT_DESC, $this->castings);

        $result = "<h1>L'acteur $this a joué dans les films suivants :</h1><ul>";

        foreach($this->castings as $casting)
        {
            $result .= "<li>".$casting->getFilm()." (".$casting->getFilm()->getDateSortie()->format('Y').")</li>";
        }

        $result .= "</ul>";

        return $result;

    }
}