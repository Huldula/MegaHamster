<?php

namespace HTL3R\MegaHamster\Rooms;

class ThePit extends SpecialRoom implements JsonSerializable
{
    public function __construct(float $length, float $price)
    {
        $this->length = $length;
        $this->price = $price;
        $this->specialEquipment = ["Hamster training gloves", "Hamster punching sack"];
    }

    
    public function calculateArea(): float
    {
        return $this->length*$this->length*(2+2*sqrt(2));
    }

    public function outputProductInfo(): string
    {
        return "'The Pit' features a side length of $this->length cm. It is available for the low price of EUR $this->price$";
        // return $this->getJson();
    }

    public function outputGeneralInfo(): string
    {
        return "Our Domain 'The Pit' is the basic choice of real estate for a hamster owner who wants variety. " .
            "It is a hexagonal home for your hexagonal hamster!";
    }

    
    public function jsonSerialize(): array
    {
        $jsonArray['name'] = 'The Pit';
        $jsonArray['price'] = $this->price;
        $jsonArray['width'] = parent::getWidth();
        $jsonArray['height'] = parent::getHeight();
        $jsonArray['length'] = parent::getLength();
        $jsonArray['specialEquipment'] = $this->specialEquipment;
        $jsonArray['imgPath'] = $this->getImageLocation();
        $jsonArray['description'] = $this->outputProductInfo();
        $jsonArray['info'] = $this->outputGeneralInfo();
        return $jsonArray;
    }
}