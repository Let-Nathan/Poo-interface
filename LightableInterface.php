<?php

interface LighTableInterface
{
    public function switchOff(): bool|string;
    public function switchOn(): bool|string;
}