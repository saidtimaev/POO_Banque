<?php


Class Film
{
    private string $titre;
    private int $duree;
    private string $resume;
    private DateTime $dateSortie;
    private Genre $genre;
    private Realisateur $realisateur;

    public function __construct(string $titre, int $duree, string $resume, string $dateSortie, Genre $genre, Realisateur $realisateur)
    {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->dateSortie = new DateTime($dateSortie);
        $this->genre = $genre;
        $this->realisateur = $realisateur;
        $this->genre->addFilm($this);
        $this->realisateur->addFilmRealises($this);
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


    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

   
    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }


    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    
    public function __toString()
    {
        return $this->titre;
    }

   
}