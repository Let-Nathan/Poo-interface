<?php

class ElectricBike extends Vehicle implements RechargeableInterface, Lightableinterface
{

    private int $charge;
    private bool $dynamo;
    private int $currentSpeed;

    public function __construct($w, $s, $c)

    {
        $this->charge = $c;
        parent::__construct($w, $s);
    }

    //Somes test
    public function setNbrWheel(int $nbrWheel): int
    {
        return $this->nbrWheel = $nbrWheel;

    }
    public function getNbrWheel(): int
    {
        return $this->nbrWheel;
    }
    public function setNbrSeat(int $nbrSeat): int
    {
       return $this->nbrSeat = $nbrSeat;
    }
    public function getNbrSeat(): int
    {
        return $this->nbrSeat;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function charge()
    {

        $actualCharge = $this->getCharge();
        $leftCharge = 99 - $actualCharge;

            for($i = 0; $i <= $leftCharge; $i++) {
                echo " In charge :  " . $this->charge + $i . PHP_EOL;

            }

            echo "Charge left : " . $this->charge + $i . PHP_EOL;
            return $this->charge += $i;

        }

    public function setSpeed(int $currentSpeed): int
    {
        return $this->currentSpeed = $currentSpeed;
    }

    public function getSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function switchOff(): bool
    {
        echo 'Light off';
        return $this->dynamo = false;
    }

    public function switchOn(): bool|string
    {
        if($this->currentSpeed > 10){
            return $this->dynamo = true;
        }
        else {
            echo 'Roule plus vite si tu veux de la lumières.';
            return $this->dynamo = false;
        }
    }

}
