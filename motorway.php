<?php

require_once 'highway.php';

final class MotorWay extends HighWay
{
    protected $nblane = 4;

    protected $maxSpeed = 130;

    public function addVehicle($vehicle) 
    {
        if ($vehicle instanceof Car) {
            parent::setCurrentVehicles($vehicle);
        }
    }
}