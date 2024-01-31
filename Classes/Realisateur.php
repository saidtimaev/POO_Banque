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
}