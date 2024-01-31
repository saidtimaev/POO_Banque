<?php


Class Film
{
    private string $titre;
    private int $duree;
    private string $resume;
    private DateTime $dateSortie;

    public function __construct(string $titre, int $duree, string $resume, string $dateSortie)
    {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->dateSortie = new DateTime($dateSortie);
    }

    
    public function getTitre(): string
    {
        return $this->titre;
    }
 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }


    public function getDuree(): int
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }


    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    
    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }


    public function __toString()
    {
        return $this->titre;
    }
}