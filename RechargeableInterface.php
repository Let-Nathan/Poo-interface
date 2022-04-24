<?php

interface RechargeableInterface
{
    public function charge();
    public function getCharge(): int;

}
