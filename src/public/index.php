<?php
$distance = new Distance(5);
$time = new Time(4);


echo $distance->distance() / $time->time();
 
class Distance
{
    private $distance;
 
    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public function distance()
    {
        return $this->distance;
    }
}

class Time
{
    private $time;
    
    public function __construct(int $time)
    {
        $this->time = $time;
    }
    
    public function time()
    {
        return $this->time;
    }
}