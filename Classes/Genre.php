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

    public function _toString()
    {
        return $this->designation;
    }
}