<?php


Class Film
{
    private int $id_film;
    private string $titre;
    private int $duree;
    private string $resume;

    public function __construct(int $id_film, string $titre, int $duree, string $resume)
    {
        $this->id_film = $id_film;
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
    }

    



    public function getId_film(): int
    {
        return $this->id_film;
    }

    public function setId_film($id_film)
    {
        $this->id_film = $id_film;

        return $this;
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