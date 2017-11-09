<?php

class Movie
{
    private $title ;
    private $description = 'A DC Comics movie.' ;
    private $duration = 120;
    private $releaseYear = 2000;
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle(String $title = "")
    {
        $this->title = $title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription(String $description = "")
    {
        $this->description = $description;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }
    
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
    
    public function setReleaseYear(int $releaseYear)
    {
        $this->releaseYear = $releaseYear;
    }
    
    public function __construct($title = "")
    {
        $this->title = $title;
    }
    
    
    public function displayMovieInfo()
    {
        print 'Title : '.$this->title."\n";
        print 'Description : '.$this->description."\n";
        print 'Duration : '.$this->duration.' min'."\n";
        print 'Release year : '.$this->releaseYear."\n";
    } 
}

$movie = new Movie;
$movie->__construct("Justice league");
$movie->displayMovieInfo();

$movie->setReleaseYear("2017");
$movie->displayMovieInfo();