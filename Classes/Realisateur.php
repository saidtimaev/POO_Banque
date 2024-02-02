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

        $dates = [];
        foreach ($this->filmsRealises as $key => $filmRealise)
        {
            $dates[$key] = $filmRealise->getDateSortie()->format('U'); // Convert date to Unix timestamp
        }

        array_multisort($dates, SORT_DESC, $this->filmsRealises);


        $result = "<h1>Le réalisateur $this a réalisé les films suivants :</h1><ul>";

        foreach($this->filmsRealises as $filmRealise)
        {
            
            $result .= "<li>".$filmRealise." (".$filmRealise->getDateSortie()->format('Y').")</li>";
        }

        $result .= "</ul>";
        return $result;
    }
}