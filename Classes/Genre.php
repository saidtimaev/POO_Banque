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
        $result = "<h1>Les films dont le genre est $this sont : <br></h1><ul>";

        foreach ($this->films as $film)
        {
            $result .= "<li>".$film."</ul><br>";
        }

        return $result;
    }

    public function __toString()
    {
        return $this->designation;
    }
}