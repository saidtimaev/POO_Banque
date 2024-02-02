<?php

class Role
{
    private string $designation;
    private array $castings;

    public function __Construct(string $designation)
    {
        $this->designation = $designation;
        $this->castings = [];
    }
    

    public function getDesignation(): string
    {
        return $this->designation;
    }


    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    public function addCasting(Casting $casting)
    {
        $this->castings[] =  $casting; 
    }

    
    public function getCastings()
    {
        return $this->castings;
    }

    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }

    public function afficherActeursRole()
    {
        $result = "<h1>Les acteurs ayant incarné le rôle de $this sont :</h1><br><ul>";

        foreach($this->castings as $casting)
        {
            $result .= "<li>".$casting->getActeur()." dans le film ".$casting->getFilm()."</li>";
        }

        $result .= "</ul>";

        return $result;
    }

    public function __toString()
    {
        return $this->designation;
    }
}