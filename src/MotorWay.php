<?php

final class MotorWay extends HighWay
{

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car) {
            $this->setCurrentVehicles([$vehicle]);
            echo 'La voiture a était about<br>';
        } else {
            echo "Impossible d'ajouter la voiture<br>";
        }
    }


}