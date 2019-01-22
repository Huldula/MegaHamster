<?php

namespace HTL3R\MegaHamster\Rooms;

abstract class SpecialRoom extends RealEstate
{
    protected $specialEquipment;

    public function getSpecialEquipment(): array
    {
        return $this->specialEquipment;
    }
}