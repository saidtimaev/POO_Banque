<?php

class Role
{
    private string $designation;

    public function __Construct(string $designation)
    {
        $this->designation = $designation;
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

    public function _toString()
    {
        return $this->designation;
    }
}