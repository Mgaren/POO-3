<?php

require_once 'highway.php';

final class PedestrianWay extends HighWay
{
    protected $nblane = 1;

    protected $maxSpeed = 10;

    public function addVehicle($vehicle) 
    {
        if ($vehicle instanceof Bicycle) {
            parent::setCurrentVehicles($vehicle);
        }
    }
}