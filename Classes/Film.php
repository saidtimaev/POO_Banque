<?php


Class Film
{
    private string $titre;
    private int $duree;
    private string $resume;

    public function __construct(string $titre, int $duree, string $resume)
    {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
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

    public function __toString()
    {
        return $this->titre;
    }
    
}