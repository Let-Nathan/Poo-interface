<?php

abstract class Vehicle
{
    protected int $nbrWheel;
    protected int $nbrSeat;

    public function __construct($w, $s)
    {
        $this->nbrWheel = $w;
        $this->nbrSeat = $s;
    }

    // somes test
    abstract function setNbrWheel(int $nbrWheel): int;
    abstract function getNbrWheel(): int;

    abstract function setNbrSeat(int $nbrSeat): int;
    abstract function getNbrSeat(): int;

}