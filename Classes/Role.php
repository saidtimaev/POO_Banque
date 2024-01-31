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

    public function addCasting(Acteur $acteur, Film $film, Role $role)
    {
        $this->castings[] =  [$acteur, $film, $role]; 
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

    public function _toString()
    {
        return $this->designation;
    }
}