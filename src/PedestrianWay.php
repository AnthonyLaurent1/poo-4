<?php

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Skateborad || $vehicle instanceof Bicycle) {
            $this->setCurrentVehicles([$vehicle]);
            echo 'Le velo / skateboard a wait about <br>';
        } else {
            echo "Impossible about le velo ou le skateboard<br>";
        }
    }


}