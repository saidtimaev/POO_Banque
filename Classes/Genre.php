<?php


Class Genre
{
    private string $designation;
    private array $films;

    public function __construct(string $designation)
    {
        $this->designation = $designation;
        $this->films = [];
    }


    public function getDesignation()
    {
        return $this->designation;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    public function addFilm(Film $film)
    {
        $this->films[] = $film;
    }

    public function AfficherFilmsGenre()
    {

        $dates = [];

        // Pour chaque objet film
        foreach ($this->films as $film)
        {
            // On stocke les dates de chaque objet film dans le tableau $dates[]
            $dates[] = $film->getDateSortie()->format('Y-m-d');
        }
        
        // On trie le tableau films selon le tri du tableau dates
        array_multisort($dates, SORT_DESC, $this->films);
        
        $result = "<h1>Le genre $this est associé à ".count($this->films)." films</h1><ul>";

        foreach ($this->films as $film)
        {
            $result .= "<li>".$film." (".$film->getDateSortie()->format('Y').")</li>";
        }

        $result .= "</ul>";

        return $result;
    }

    public function __toString()
    {
        return $this->designation;
    }
}