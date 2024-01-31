<?php

Class Realisateur extends Personne
{
    private array $filmsRealises;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->filmsRealises = [];
    }

    


    public function getFilmsRealises(): array
    {
        return $this->filmsRealises;
    }

 
    public function setFilmsRealises($filmsRealises)
    {
        $this->filmsRealises = $filmsRealises;

        return $this;
    }

    public function addFilmRealises(Film $filmRealises)
    {
        $this->filmsRealises[] = $filmRealises;
    }

    public function afficherFilmsRealises()
    {
        $result = "<h1>Le réalisateur $this a réalisé les films suivants :</h1><br><ul>";

        foreach($this->filmsRealises as $filmsRealises)
        {
            $result .= "<li>".$filmsRealises."</ul><br>";
        }
        return $result;
    }
}