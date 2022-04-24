<?php

require 'Vehicle.php';
require 'RechargeableInterface.php';
require 'LightableInterface.php';
require 'ElectricBike.php';

$velo = new ElectricBike(2,1, 73);
$velo->charge();
$velo->setSpeed(5);
$velo->switchOn();