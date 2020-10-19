<?php

require_once 'highway.php';

final class ResidentialWay extends HighWay
{
    protected $nblane = 2;

    protected $maxSpeed = 50;

    public function addVehicle($vehicle) 
    {
        if ($vehicle instanceof Vehicle) {
            parent::setCurrentVehicles($vehicle);
        }
    }
}