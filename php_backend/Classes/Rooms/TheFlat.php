<?php

namespace HTL3R\MegaHamster\Rooms;

class TheFlat extends SpecialRoom implements JsonSerializable
{
    public function __construct(float $length, float $width, float $height, float $price)
    {
        parent::__construct($length, $width, $height, $price);
        $this->specialEquipment = ["Food jars"];
    }

    public function outputProductInfo(): string
    {
        return "Our Domain 'The Flat' is the advanced choice of real estate for a hamster owner with a lot of experience. " . $this->basicOutputInfo();
    }
    
    public function jsonSerialize(): array
    {
        $jsonArray['name'] = 'TheFlat';
        $jsonArray['price'] = $this->price;
        $jsonArray['width'] = parent::getWidth();
        $jsonArray['height'] = parent::getHeight();
        $jsonArray['length'] = parent::getLength();
        $jsonArray['specialEquipment'] = $this->specialEquipment;
        $jsonArray['imgPath'] = $this->getImageLocation();
        $jsonArray['description'] = "Our Domain ‘The Flat’ is the best choice of real estate for a hamster owner. It features a length of " . parent::getLength() . "cm, a width of ". parent::getWidth() ."cm and a height of ". parent::getHeight() ." cm. It is available for the low price of EUR". $this->price .",-";
        return $jsonArray;
    }
}