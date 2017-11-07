<?php
class Movie
{
    public $name = null;
    public $description = "une desciption";
    public $duration = 120;
    public $year= 1980;
    
    public function getName()
    {
        echo "$this->name";
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        echo "$this->description";
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    public function getDuration()
    {
        echo "$this->duration";
    }
    
    public function setDuration($duration = "")
    {
        $this->duration = $duration;
    }
    
    
    function getYear()
    {
        echo "$this->year";
    }
    
    function setYear($year = "")
    {
        $year->year = $year;
    }
}

$movie = new Movie;
$movie->getName();
$movie->getDescription();
