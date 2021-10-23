<?php

final class ResidentialWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles([$vehicle]);
        echo 'Le vehicule a était ajouté <br>';
    }


}