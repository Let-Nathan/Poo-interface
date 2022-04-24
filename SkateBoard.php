<?php

class SkateBoard extends Vehicle
{
   public function __construct($w, $s)
   {
       parent::__construct($w, $s);
   }

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

}