<?php

namespace HTL3R\MegaHamster\Rooms;

class TheRoom extends RealEstate implements JsonSerializable
{
    public function __construct(float $length, float $width, float $height, float $price)
    {
        parent::__construct($length, $width, $height, $price);
    }

    public function outputProductInfo(): string
    {
        return "Our Domain 'The Room' is the basic choice of real estate for a hamster owner. " . $this->basicOutputInfo();
    }

    public function outputGeneralInfo(): string
    {
        return "Our Domain 'The Room' is the basic choice of real estate for a basic hamster owner. " .
            "It is a simple room for your chilled hamster with chilled needs!";
    }
    
    public function jsonSerialize(): array
    {
        $jsonArray['name'] = 'The Room';
        $jsonArray['price'] = $this->price;
        $jsonArray['width'] = parent::getWidth();
        $jsonArray['height'] = parent::getHeight();
        $jsonArray['length'] = parent::getLength();
        $jsonArray['specialEquipment'] = "";
        $jsonArray['imgPath'] = $this->getImageLocation();
        $jsonArray['description'] = $this->outputProductInfo();
        $jsonArray['info'] = $this->outputGeneralInfo();
        return $jsonArray;
    }
}